<?php

 /**
  * Objektklasse "Workflow" 
   
  */
 
  require("model/all.inc.php");
 
 // 
 class workflow
 {
	var $id;
 
 /**
  * Workflow Komponente
  */
  
    function __construct($id = 0)
	{
		if($id==0)
			return;
				
		$this->id = $id; 
	}
	
	function getworkitems()
	{		
			// Bei Falschem Status ( duch zurück Button) vorherigen schritt auswählen
			$this->repairdirty();
			$db = new database();
			$sql = "SELECT * FROM `wf_workitem`,`wf_activity` WHERE `wf_workitem`.`activity` = `wf_activity`.`activity_id` and  `wf_workitem`.`active` = '1'
									AND `wf_workitem`.`owner` = '".$_SESSION['role']."'" ;
			$result =$db->sendsql2($sql);
			
			$sql = "SELECT * FROM `wf_workitem`,`wf_activity`,`post` 
						WHERE `wf_workitem`.`activity` = `wf_activity`.`activity_id` 
									and  `wf_workitem`.`subjectid` = `post`.`postid`
									and  `post`.`manager` = '".$_SESSION['user']."'
									and  `wf_workitem`.`active` = '1'
									AND `wf_workitem`.`owner` = 'hrm'" ;
			$result['myposts'] = $db->sendsql2($sql);
			return $result;
	}
	
	function repairdirty()
	{
			// Load WI
			$dirty = false;
			$db = new database();
			$sql = "SELECT * FROM `wf_workitem`,`wf_activity` WHERE `wf_workitem`.`activity` = `wf_activity`.`activity_id` and  `wf_workitem`.`active` = '1'
					" ;
			$result =$db->sendsql2($sql);
						
			// Check for Errors
			foreach($result as $result_id => $workarea)
			{
						
				if( $workarea['dirty']==1 )
					{
						$this->id = $workarea['workitem_id'];
						$this->rollback();
						$dirty = true;
					}
			}
			
			if($dirty == true)
				$this->repairdirty();
			
	}
	

	function createworkitem($place,$i_subjectid = 0, $title ="")
	{
			$activity = $this->getnextactivity($place); //Nextstep = 1 für stelle anlegen
			$owner = $this->getowner($activity); //Nextstep = 1 für stelle anlegen	
			$comment = $this->getcomment();
			$db = new database();
			
			// Subject ID, üblicherweise aus dem alten Workitem, bei der Stellenanlage wird es aber übergeben
			$subjectid = $db->sendsql("Select subjectid from wf_workitem where workitem_id = '".$this->id . "';"); 
			$subjectid = $subjectid[0];
			
			if ($subjectid == 0)
				{
					$subjectid = $i_subjectid;
				}
		
			if ($title =="")
				{
				$title = $db->sendsql("select title from wf_workitem where workitem_id = '".$this->id . "';"); 
				$title = $title[0];
						if ($title =="")
							{
								$title = $db->sendsql("select title from post where postid = '".$subjectid . "';"); 
								$title = $title[0];
							}
				}
			
			$sql= "INSERT INTO  `mobirecruit`.`wf_workitem` (
																
																`activity` ,
																`place` ,
																`subjectid` ,
																`oldwi` ,
																`active`,
																`owner`,
																`title`,
																`user`,
																`comment`)
								values('". $activity ."',
									   '". $place ."',
									   '". $subjectid ."',
									   '". $this->id ."',
									       '1',
										'". $owner ."',
										'". $title ."',
										'". $_SESSION['user'] ."',
										'". $comment ."'
										);";		
			$this->id = $db->savesql($sql);
		
	}
	

	
	function getnextactivity($place)
	{
			$db = new database();
			$sqlstring="SELECT nextstep  
						FROM wf_place
						WHERE place_name ='". $place ."'
						";
			$information = $db->sendsql($sqlstring);
			return $information[0];
	}
	
	function getowner($activity)
	{
			$db = new database();
		    $sql = "Select owner from wf_activity where activity_id = '". $activity ."'";
			$owner = $db->sendsql($sql);
			return $owner[0];
	}
	
	function getpai() // process after input
	{		
			// Aktivität nach verlassen eines Ortes ausgeben
			$db = new database();
			$sqlstring="SELECT * FROM `wf_activity` , `wf_place` , `wf_workitem` 
						WHERE 
						`wf_activity`.`activity_id` = `wf_place`.`pai` 
						AND
						`wf_place`.`place_name` = `wf_workitem`.`place`
						AND
						`wf_workitem`.`workitem_id` = '". $this->id ."'
						";
			$information = $db->sendsql($sqlstring);
			return $information;
	}
	
	function process($data = "")
	{
			$db = new database();
			$sqlstring=" 
						SELECT * FROM `wf_workitem`,`wf_activity` 
						WHERE `wf_workitem`.`activity` = `wf_activity`.`activity_id` 
						AND  `wf_workitem`.`active` = '1'
						AND  `wf_workitem`.`workitem_id` ='". $this->id ."'
						";
			$information = $db->sendsql($sqlstring);
			//1. Objekt erzeugen
			$class = new $information['group']($information['subjectid']);
			//Methode aufrufen mit parametern
			$result = call_user_func_array(array(&$class, $information['task']),array($information['workitem_id'],$information['variable']));
			$result['workitem_context'] = $information;
			if($result['type'] == 'display')
			{
					//Aufgabe war Anzeigen, Daten weiterreichen
					$result['data'] = $data;
					return $result;
			}
			else
			{
					//Aufgabe war Daten für Anzeige laden, workitem aktualisieren, proccess und daten weiterreichen zum anzeigen
					$sqlstring = "SELECT nextactivity from wf_activity where activity_id = (SELECT activity from wf_workitem where workitem_id ='". $this->id ."')";
					$nextactivity = $db->sendsql($sqlstring);	
					$nextactivity = $nextactivity[0];
					$sqlstring = "UPDATE  `mobirecruit`.`wf_workitem` SET  `activity` = '". $nextactivity ."' WHERE  `wf_workitem`.`workitem_id`= '". $this->id ."'";
					$db->savesql($sqlstring);	
					return $this->process($result);
			}
	}
	
	function callscreen($workitem_id = 0, $template = 'workflow/workflow_start.tpl')
	{
			$result['type'] =  'display';
			$result['workitem'] = $workitem_id;
			$result['template'] =  $template;
			return $result;
	}
	
	function input($POST)
	{	
		If($POST['TextArea'] == '')
			$POST['TextArea'] = 'nocomment';
		$this->updatecomment($POST['TextArea']);
		//Process after Input ermitteln (Klasse und Methode)
		$pai = $this->getpai();
		$class = new $pai['group']();
		if(method_exists($class, $pai['task']))
		{
			$result = call_user_func_array(array(&$class, $pai['task']),array($POST));
			}
		else
		{
			echo "Falsche Methode aufgerufen: ". $pai['task'];
		}
		$place = $this->next();
		$this->createworkitem($place,$result,$POST['title']);	
	}
	
	function next()
	{
		$this->setinactive();
		$place = $this->getnextplace();
		return $place;
	}
	
	function setinactive()
	{
			$db = new database();
			$sqlstring="UPDATE  `mobirecruit`.`wf_workitem` SET  `active` =  '0' WHERE  `wf_workitem`.`workitem_id`
					='". $this->id ."'
						";
			$db->savesql($sqlstring);
	}
	
	
	function getnextplace()
	{
		
		$db = new database();
			$sqlstring="SELECT nextplace  
						FROM wf_activity, wf_workitem
						WHERE 
						wf_activity.activity_id = wf_workitem.activity
						AND wf_workitem.workitem_id ='". $this->id ."'
						";
	
			$information = $db->sendsql($sqlstring);
			return $information[0];	
	}
	
	function rollback($comment = '')
	{
		$db = new database();	
		$this->updatecomment($comment);
		
		
		$sql = "select `wf_activity`.`activity_id` from `mobirecruit`.`wf_activity` where `nextactivity` = (
					SELECT activity FROM `wf_workitem` WHERE `workitem_id` = '". $this->id ."')";
		$previousactivity = $db->sendsql($sql);
		$previousactivity = $previousactivity[0];
		if($previousactivity == 0 or $previousactivity == 1)
			{
			$this->setinactive();
			$this->createworkitem("start");
			return;
			}
		else 
			{
			$sqlstring = "SELECT OWNER FROM wf_activity where activity_id = '". $previousactivity ."'";
			$owner = $db->sendsql($sqlstring);
			$owner = $owner[0];
			$sqlstring = "UPDATE  `mobirecruit`.`wf_workitem` SET  `activity` = '". $previousactivity ."', `owner` = '". $owner ."'   WHERE  `wf_workitem`.`workitem_id`= '". $this->id ."'";
			}
		
		$db->savesql($sqlstring);	
		
		  // Platz aktualisieren
		  $place = $this->getnextplace();
		  $sqlstring = "UPDATE  `mobirecruit`.`wf_workitem` SET  `place` = '". $place ."'  WHERE  `wf_workitem`.`workitem_id`= '". $this->id ."'";
		$db->savesql($sqlstring);
		
	}
	
	function updatecomment($comment = '')
	{		
			if(is_array($comment))
				return false;
		
			if($comment != '')
			{
			if($comment == 'nocomment')
				$comment = '';
			$db = new database();
			$sqlstring = "select comment from mobirecruit.wf_workitem where `wf_workitem`.`workitem_id`= '". $this->id ."'";
			$oldcomment = $db->sendsql($sqlstring);
			$oldcomment = $oldcomment[0];
			if( $oldcomment != '')
			$oldcomment .= " <br> ";
			$activity = $db->sendsql("select wf_activity.name from wf_workitem, wf_activity where  
										wf_activity.activity_id =  wf_workitem.activity
										AND`wf_workitem`.`workitem_id`= '". $this->id ."'");
										
			// Beginning of new Comment:
			$oldcomment .= '<a href="workflowcontroller?id='. $this->id .'&task=inquiry&subject='.$activity[0].'" target="_blank" >';
			$oldcomment .= date('j.n.Y,H:m');
			$oldcomment .= " ";
			$oldcomment .=  $_SESSION['user'];
			$oldcomment .= ", ";
			$oldcomment .= $activity[0];
			$oldcomment .= " ";
			$oldcomment .= ": <i> ";
			$oldcomment .=  $comment ;
			$oldcomment .= "</i> ";
			$oldcomment .= "</a>";
			$sqlstring = "UPDATE  `mobirecruit`.`wf_workitem` SET   `comment` =  '". $oldcomment."' WHERE  `wf_workitem`.`workitem_id`= '". $this->id ."'";
			$db->savesql($sqlstring);
			}			
	}
	
	function approve($POST = '')
	{
		If($POST['TextArea'] == '')
			$POST['TextArea'] = 'nocomment';
		$this->updatecomment($POST['TextArea']);
		$subjectid = $this->getsubjectid();
		$place = $this->next();
	    if($place == 'finish')
			return;
		$this->createworkitem($place,$subjectid,"");
	}
	
	function getsubjectid()
	{
		$db = new database();
			$sqlstring="SELECT  subjectid  
						FROM wf_workitem
						WHERE 
						workitem_id ='". $this->id ."'
						";
			$information = $db->sendsql($sqlstring);
			return $information[0];	
	}
	
	function getcomment()
	{
		$db = new database();
			$sqlstring="SELECT comment  
						FROM wf_workitem
						WHERE 
						workitem_id ='". $this->id ."'
						";
			$information = $db->sendsql($sqlstring);
			return $information[0];	
	}
	
	function inquiry($subject)
	{
		if($subject == 'Stelle auswählen')
		{
			$post = new post();
			$result['data'] = $post->getposts($this->id);
			$result['template'] = 'workflow_view\post_chose.tpl';
		}
		if($subject == 'Stelle genehmigen')
		{
			$post = new post();
			$post->setpostid($this->id);
			$result['data'] = $post->getdata();
			$result['template'] = 'workflow_view\approve_post.tpl';
		}
		if($subject == 'Beschaffungswege wählen' or $subject == 'Beschaffungswege genehmigen')
		{
			$post = new post();
			$post->setpostid($this->id);
			$result['data'] = $post->getdata();
			$result['template'] = 'workflow_view\approve_process.tpl';
		}
		if($subject == 'Vorselektion der Bewerber' or $subject == 'Vorselektion genehmigen')
		{
			$post = new post();
			$post->setpostid($this->id);
			$result['data'] = $post->get_allocation();
			$result['template'] = 'workflow_view\approve_allocation.tpl';
		}
		
		if($subject == 'Auswahlverfahren wählen')
		{
			$post = new post();
			$post->setpostid($this->id);
			$result['data'] = $post->getdata();
			$result['template'] = 'workflow_view\wf_chose_mode.tpl';
		}
		
		if($subject == 'Bewerber bewerten' or $subject == 'Bewertung anzeigen')
		{
			$post = new post();
			$post->setpostid($this->id);
			$result['data'] = $post->get_rating();
			$result['template'] = 'workflow_view\view_rating.tpl';
		}

	
		//Context:
		
		$db = new database();
			$sqlstring=" 
						SELECT * FROM `wf_workitem`,`wf_activity` 
						WHERE `wf_workitem`.`activity` = `wf_activity`.`activity_id` 
						AND  `wf_workitem`.`workitem_id` ='". $this->id ."'
						";
	   $result['workitem_context'] = $db->sendsql($sqlstring);
	   return $result;	
			
	}
	
	

}
?>