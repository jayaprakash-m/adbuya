<?php

class Dbconnection {
		 
		private	$_database;
		private $_link;
		private $_query;		 
		
		public function __construct() {
			global $DBINFO;		

		    $this->link =$this->openConnection($DBINFO['DBName'],$DBINFO['DBHOST'],$DBINFO['DBUserName'],$DBINFO['DBPassword']);	
		}
		
		public function __destruct() {
		}
		
		public function closeConnection() {
			if($this -> _query) {
				@mysql_free_result($this -> _query);
			}

			if($this -> _link) {
				mysql_close($this -> _link);
			}
		}
		
		public function countRows($sql) {

			$result =mysql_query($sql);
			if($result)
			return mysql_num_rows($result);
		}	
			
		public function getResult($sql) { 	  
			$this -> runQuery($sql);			
			while($result[] = @mysql_fetch_array($this -> _query, MYSQL_ASSOC));						 			 
			foreach ($result as $key => $value) {
			         
					if ($value=='') {
							unset($result[$key]);
					}
			} 
			//echo "<pre>"; print_r($result);					
			return $result;
			
		}
			
		public function getResultFields() {
			$fields = array();			
			for($i = 0; $i < mysql_num_fields($this -> _query); $i++) {
				array_push($fields, mysql_field_name($this -> _query, $i));
			}
			
			sort($fields);
			
			return $fields;
		}		
			
		public function listColumns($table) {
			$columns = array();
			
			$fields = mysql_list_fields($this -> _database, $table, $this -> _link);
			
			$numberOfColumns = mysql_num_fields($fields);
			
			for ($i = 0; $i < $numberOfColumns; $i++) {
				array_push($columns, mysql_field_name($fields, $i));			
			}
			
			return $columns;
		}
		
		public function listTables() {
			$tables = mysql_list_tables($this -> _database);			
			return $tables;
		}
		
		public function openConnection($database, $hostname, $username,$password) {
			
			 
			/*			
			$this->link = new mysqli($DBINFO['DBHOST'], $DBINFO['DBUserName'], $DBINFO['DBPassword'], $DBINFO['DBName']) or die('There was a problem connecting to the database');
			*/
                        
			$link =  mysql_connect($hostname, $username, $password) or die("MYSQL NOT CONNECTED");
			if($link) {
				mysql_select_db($database);				
				mysql_query("SET NAMES 'utf8'");
			}
			return $link;			 
		}
		
		public function runQuery($sql){				    
			$this->_query = @mysql_query($sql);  					
			return mysql_insert_id();	
		}
	}
