<?php

 /**
  * Objektklasse "Event" 
  * Hier steht alle objektbezogene Logik! 
  */
  
 require_once("model/database.inc.php");
  
 // 
 class event
 {
	var $id;
	
 
 /**
  * Konstruktor
  */
  
    function __construct($event_id)
	{
		if($event_id=0)
			return;
				
		$this->id = $event_id; 		
		
	}
	
	
	function getallevents()
	{
			$db = new database();
			$sqlstring="Select * from event WHERE id  = '". $this->id ."' order by scheduledstart desc";
			$information = $db->sendsql($sqlstring);
			return $information;
	}
	
	function getevents($id,$idtype,$selection)
	{
			$db = new database();
			
			switch($idtype) {
			case 'contact':	
				$sqlstring="Select * from event where contact ='".$id."' ";
				break;
			case 'post':	
				$sqlstring="Select * from event where post ='".$id."' ";
				break;
			case 'user':	
				$sqlstring="Select * from event where user ='".$id."' ";
				break;	
			}
			
			switch($selection)
			{	
			case 'pastevents':
				$sqlstring = $sqlstring. 'and scheduledstart <  CURRENT_DATE( )  ';
				break;
			case 'futureevents':
				$sqlstring = $sqlstring. 'and scheduledstart > CURRENT_DATE( )'; 
				break;
			case 'all':
				$sqlstring = $sqlstring;
				break;
			}
			
			$sqlstring = $sqlstring ." order by scheduledstart desc;";
			$information = $db->sendsql2($sqlstring);
			return $information;
	}
	
					
	function createevent($timestamp,$title,$description,$id,$type)
					{ 

					switch ($type)
					{
						case 'contact':
							$contact = $id;
							break;
						case 'post':
							$post = $id;
							break;
						case '':
							$contact = "";
							$post ="";
							break;						
					}
				
									
					if ($timestamp == false)
					{
						$timestamp = time();
					} 
					
						
					
					$sql= "insert into event (scheduledstart, contact, post, user, title, description) 
								values('". date('YmdHis',$timestamp) ."','". $contact ."','". $post ."','". $_SESSION['user'] ."','". $title ."','". $description ."');";	
					
					$db = new database ();
					$this->id = $db->savesql($sql);
					
					return $this->id;
					}
					
		
	 
}
?>