<?php

 /**
  * Objektklasse "Stellen" 
  * Hier steht alle objektbezogene Logik! 
  */
  
 require_once("model/database.inc.php");
 require_once("model/event.inc.php");
 require_once("model/contact.inc.php");
 require_once("model/post.inc.php");
 // 
 class post{
	var $id;
	 
 /**
  * Verbindung zur Datenbank
  */
  
	function __construct($post_id = 0){
		if($post_id==0)
			return;
		$this->id = $post_id; 		
	}
	
	function saveskills($DATA){
		$contact = new contact();
		//http://www.php.net/manual/de/book.pcre.php
		//preg_match_all('/\d+|[a-z]+/i', $input, $result);

		foreach($DATA as $key => $value){	
			if($key <> 'TextArea' and $key <> 'workitem' and $key <> 'id' ){
				// Werte Splitten:
				// Array ( [0] => a [1] => 2 )
				$split = preg_split('/_/', $key);
				$contactid = $split['1'];
				$skill = $split['0'];

				if($value <> 0 ){
					$contact->updateskill($contactid,$skill,$value);
				}
			}
		}
	}
					
	function search($string){
		$db = new database();
		$result =$db->sendsql2("Select * from post WHERE title like '%". $string ."%' OR description like '%". $string ."%'");
		return $result;
	}
	
	function setpostid($workitem){
		$db = new database();
		$result =$db->sendsql("Select subjectid from wf_workitem WHERE workitem_id = '". $workitem ."'");
		$this->id = $result[0]; 	
	}
  
	function getdata(){
		$db = new database();
		$sqlstring="Select * from post WHERE postid  = '". $this->id ."'";
		$information = $db->sendsql($sqlstring);
		
		// Marius Becker 24.08 Events deaktiviert
		//$event = new event(0);
		//$information['events'] = $event->getevents($this->id,'post','futureevents');
		return $information;
	}
	
	function getposts(){
		$db = new database();
		$sqlstring="Select * from post";
		$information = $db->sendsql2($sqlstring);
		return $information;
	}
	
	function getassignedcontacts(){
		$db = new database();
		$sqlstring="SELECT * FROM contact WHERE contactid IN (
						SELECT contactid FROM `contact_post` WHERE postid ='". $this->id ."' 
						AND selected = 1 )";
		
		$information = $db->sendsql2($sqlstring);
		return $information;
	}
	
	function updatepost($title = "",$description ="",$mode =""){ 
		$sql= "UPDATE post SET ";
		if($title!="")
			$sql .= "title ='". $title ."',";
		if($description!="")
			$sql .= "description ='". $description ."',";
		 if($mode!="") 			
		 	$sql .= "mode ='". $mode ."',";
		
		$sql=substr($sql, 0, -1);						
		$sql .=" WHERE postid='". $this->id ."';";
		$db = new database();
		$db->savesql($sql);
	}
					
	function createpost($post){ 
		$sql= "insert into post (title, description, personnel, degree, profession, manager) 
				values('". $post['title'] ."','". $post['description'] ."','". $post['personnel'] ."','". $post['degree'] ."','". $post['profession'] ."','". $_SESSION['user'] ."' );";							
		$db = new database ();
		$this->id = $db->savesql($sql);
		return $this->id;
	}		

	function choosepost($post){ 
		$sql = "update post set manager = '". $_SESSION['user'] ."' where postid = '". $post['postid'] . "';";
		$db = new database ();
		$this->id = $db->savesql($sql);
		return $post['postid'];
	}
	
	function addnote($text){ 
		$event = new event (0);
		$event->createevent(false,'Notiz',$text,$this->id,'post');
	}
					
	function getnotassignedcontacts(){
		$contact = new contact();
		$contacts = $contact->getnotassignedcontacts();
		return $contacts;
	}
	
	function save_allocation($DATA){
		$wf = new workflow($DATA['workitem']);
		$post = $wf->getsubjectid();
		$this->delete_allcation($post);
		
		foreach($DATA as $key => $value){	
			if($key <> 0){
				$contact = new contact($key);
				if($post <> 0)
				$contact->setpost($post,1);
			}
		}
	}
	
	function delete_allcation($postid){
		$db = new database ();
		$SQL = "Delete from contact_post where postid ='" . $postid . "'";
		$db->savesql($SQL);
	}
					
	function get_allocation(){
		//1. Alle ausgewählten
		$data['chosen'] = $this->getassignedcontacts();
		//2. Alle nicht ausgewählten
		$data['notchosen'] = $this->getnotassignedcontacts();
		return $data;
	}
	
	function get_rating(){
		//1. Alle ausgewählten
		$data['chosen'] = $this->getassignedcontacts();
		// Dazugehörige Stellenanforderungen
		$data['postdata'] = $this->getdata();
		// Fit berechnen:
		$contact = new contact();
		foreach($data['chosen'] as $key1 => $array){
			foreach($data['chosen'][$key1] as $key => $value){
				if ($key == 'contactid'){
					$avg = $contact->getrating($value);
					$data['chosen'][$key1]['avg'] = $avg;
				}
			}
		}
		return $data;
	}

	function save_mode($DATA){
		$wf = new workflow($DATA['workitem']);
		$postid = $wf->getsubjectid();
		$assessment = (boolean) $DATA['assessment'];
		$interview = (boolean) $DATA['interview'];
		$test = (boolean) $DATA['test'];
		$SQL = "UPDATE  `mobirecruit`.`post` SET  
						`assessment` = '" . $assessment . "'
						,`interview` = '" . $interview . "'
						,`test` = '" . $test . "'
					  	 WHERE  `post`.`postid` ='" . $postid . "'";
		$db = new database ();
		$db->savesql($SQL);
	}
	
	function save_process($DATA){
		$db = new database ();
		$stellenaus = 0;
		$ansprache = 0;
		$anfrage = 0;
		$internet = 0;
		$personalberater = 0;
		$zeitarbeit = 0;
		$baa = 0;
		foreach($DATA as $key => $value){
			if($key == 'stellenaus' )
				$stellenaus = 1;
			if($key ==  'ansprache')
				$ansprache = 1;
			if($key ==  'anfrage')
				$anfrage = 1;
			if($key == 'internet')
				$internet = 1;
			if($key ==  'personalberater')
				$personalberater = 1;	
			if($key ==  'zeitarbeit')
				$zeitarbeit = 1;
			if($key ==  'baa')
				$baa = 1;
		}
		$SQL = "SELECT SUBJECTID
				FROM WF_WORKITEM
				WHERE WORKITEM_ID ='". $DATA['workitem']."'";
		$postid = $db->sendsql($SQL);
		$postid = $postid[0];	
		$SQL = "UPDATE  `mobirecruit`.`post` SET  
						`stellenaus` = '" . $stellenaus . "'
						,`ansprache` = '" . $ansprache . "'
						,`anfrage` = '" . $anfrage . "'
						,`internet` =  '" . $internet . "'
						,`personalberater` =  '" . $personalberater . "'
						,`zeitarbeit` = '" . $zeitarbeit . "'
						,`baa` =  '" . $baa . "'
				WHERE  `post`.`postid` ='" . $postid . "'";
		$db->savesql($SQL);
	}
	
	function get_processes(){
		$db = new database ();
		$SQL = "SELECT * FROM wf_workitem WHERE subjectid ='". $this->id ."' and active = '1' or ( active = '0' and activity = '61') ;";
		$information = $db->sendsql2($SQL);
		return $information;
	}
}
?>