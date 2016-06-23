<?php

 /**
  * Objektklasse "Bewerber" 
  * Hier steht alle objektbezogene Logik! 
  */
  
require_once("model/database.inc.php");
require_once("model/event.inc.php");

class contact{
	var $id;

 	/**
  	* Verbindung zur Datenbank
  	*/
    function __construct($contact_id = 0){
		if(isset($contact_id))
			$this->id = $contact_id;
	}
  
	function getdata(){
		$db = new database();
		$sqlstring="SELECT * FROM contact WHERE contactid = '". $this->id ."'";
		$information = $db->sendsql($sqlstring);
			
		$event = new event(0);
		$information['events'] = $event->getevents($this->id,'contact','futureevents');
			
		$sqlstring="SELECT postid FROM contact_post WHERE contactid ='". $this->id ."'";
		$postid = $db->sendsql($sqlstring);
		$information['postid'] = $postid[0];
			
		$sqlstring="SELECT * FROM post WHERE postid ='". $postid[0] ."'";
		$postdata = $db->sendsql($sqlstring);
		$information['posttitle']= $postdata['title'];
			
		return $information;
	}
	
	function getcontacts(){
		$db = new database();
		$sqlstring="SELECT * FROM contact";
		$information = $db->sendsql2($sqlstring);
		return $information;
	}
	
	function getnotassignedcontacts(){
		$db = new database();
		$sqlstring="SELECT * FROM `contact`
					WHERE `contactid` NOT IN 
					(SELECT `contactid` FROM `contact_post` where selected = 1)";
		$information = $db->sendsql2($sqlstring);
		return $information;
	}
	
	function updatecontact($firstname,$lastname,$address1_line1,$address1_city,$telephone1,$emailaddress1,$address1_postalcode,$degree,$profession){ 
		$sql= "UPDATE contact SET ";
				if($firstname!="")
					$sql .= "firstname ='". $firstname ."',";
				if($lastname!="")
					$sql .= "lastname ='". $lastname ."',";
				if($address1_line1!="")
					$sql .= "address1_line1	='". $address1_line1 ."',";
				if($address1_city!="")
					$sql .= "address1_city ='". $address1_city ."',";
				if($telephone1!="")
					$sql .= "telephone1 ='". $telephone1 ."',";
				if($emailaddress1!="")
					$sql .= "emailaddress1 ='". $emailaddress1 ."',";
				if($address1_postalcode!="") 
					$sql .= "address1_postalcode ='". $address1_postalcode ."',";
				if($degree!="")
					$sql .= "degree ='". $degree ."',";
				if($profession!="")
					$sql .= "profession ='". $profession ."',";
		$sql=substr($sql, 0, -1);						
		$sql .=" WHERE contactid='". $this->id ."';";
					
		$db = new database();
		$db->savesql($sql);
	}
					
	function createcontact($firstname,$lastname){ 
		$sql= "INSERT INTO contact (firstname, lastname) 
				VALUES('". $firstname ."','". $lastname ."');";							
					
		$db = new database();
		$this->id = $db->savesql($sql);
					
		$event = new event(0);
		$event->createevent(false,'Bewerber angelegt','Bewerber angelegt',$this->id,'contact');
					
		return $this->id;
	}

	function setpost($postid,$selected = 0){ 
		$db = new database();
		$sqlstring="SELECT * FROM contact_post WHERE contactid = '". $this->id ."'";
		$information = $db->sendsql($sqlstring);
		if(isset($information[0])){
			if($selected == 1){	
				$sql= "UPDATE contact_post SET postid ='". $postid ."', selected = 1 WHERE contactid = '". $this->id ."';";
			}
			else{
				$sql= "UPDATE contact_post SET postid ='". $postid ."'  WHERE contactid = '". $this->id ."';";
			}
		}									
		else{
			if($selected == 1){	
				$sql= "INSERT INTO contact_post (contactid, postid, selected) VALUES('". $this->id ."','". $postid ."','1');";
			}
			else{
				$sql= "INSERT INTO contact_post (contactid, postid) VALUES('". $this->id ."','". $postid ."');";
			}
		}
		$this->id = $db->savesql($sql);
	}
					
	function addnote($text){ 
		$event = new event (0);
		$event->createevent(false,'Notiz',$text,$this->id,'contact');
	}	
					
	function getrole($username){
		$db = new database();
		$sqlstring="SELECT role FROM login WHERE username ='".$username."';";
		$information = $db->sendsql($sqlstring);
		return $information[0];
	}	
	
	function updateskill($contactid,$skill,$value){
	 $db = new database();
	 $skill = 'skill_'.$skill;
	 $SQL = "UPDATE contact SET ".$skill." = '".$value."' WHERE contactid = '".$contactid."'";
	 $db->savesql($SQL);
	}
	
	function getrating($contactid = 0){
		if($contactid == 0)
			return 0;
		$db = new database();
		$sqlstring="SELECT * FROM contact WHERE contactid ='".$contactid."';";
		$information = $db->sendsql($sqlstring);
			
		$sum = $information['skill_a'] + $information['skill_b'] + $information['skill_c'] + $information['skill_d'];
		$avg = $sum / 4;
		return $avg;
	}
}
?>