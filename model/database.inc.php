<?php

 /**
  * Objektklasse "Database" 
  * Hier steht alle objektbezogene Logik! 
  */
class database{
	private $connection = null;
 
 	/**
  	 * Verbindung zur Datenbank
  	 */
	
	private function _connect(){
		$this->connection = mysqli_connect("localhost", "root", "", 'mobirecruit') or die('Verbindung schlug fehl: ' . mysqli_error());
	}

	/**
 	 * Einfache Methode, um einen SQL string zu senden und Ergebnis zurückzuliefern
 	 */	
	public function sendsql($sql){
		if($sql == '')
			return;
		if($this->connection == null)
			$this->_connect();
		$result = mysqli_query($this->connection,$sql);
	
		if($result == false){
			echo "falsche SQL Anweisung: ";
			echo $sql;
		}
		else{
			$row = mysqli_fetch_array($result);
			return $row;
		}
	}
	
	/**
 	 * Sql-Abfrage, welche Mehrdimensionale Arrays als Ergebnis ausgibt
 	 */
	public function sendsql2($sql){
		if($sql == '')
			return;
		if($this->connection == null )
			$this->_connect();
		
		$result = mysqli_query($this->connection,$sql);
		$rows = array();
		
		if($result == false){
			echo "falsche SQL Anweisung: ";
			echo $sql;
		}
		else{
			while ($row = mysqli_fetch_array($result)){
				array_push($rows, $row);
			}
			return $rows;
		}
	}
	
	/**
 	 * Ausführen eines SQL-Befehls ohne Rückgabe eines Wertes
	 */ 
	public function savesql($sql){
		if($sql == '')
			return;
		if($this->connection == null )
			$this->_connect();
		mysqli_query($this->connection,$sql);
		$id = mysqli_insert_id($this->connection);

		return $id;
	}
}
?>