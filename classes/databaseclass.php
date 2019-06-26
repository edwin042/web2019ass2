<?php
	//Database connection class
	class DatabaseClass{
		public $table;
		//default constructor to get the table name
		public function __construct($getTable){
			$this->table = $getTable;
		}
		//save function which will insert the record if there is no primary key else will update the record
		function saveFunction($data, $primarykey = ''){
		    try{
		        $this->insertRecord($data);
		        return true;
		    }
		    catch(Exception $e){
		        $this->updateRecord($data, $primarykey);
		        return true;
		    }
		}
		//function to insert into the table
		function insertRecord($data) {
		    global $pdo;
		    $keys = array_keys($data);
		    $implodeKeysWithComma = implode(', ', $keys);
		    $implodeKeysWithCommaAndColon = implode(', :', $keys);
		    //insert command
		    $query = "INSERT INTO $this->table($implodeKeysWithComma) VALUES(:$implodeKeysWithCommaAndColon)";
		    $statement = $pdo->prepare($query);
		    $statement->execute($data);
		    return true;
		}
		//function to update the record into the table
		function updateRecord($record, $pk){
		    global $pdo;
		    $para = [];
		    foreach ($record as $key => $value) {
		        $para[] = $key . ' = :' . $key;
		    }
		    $paraList = implode(', ', $para);
		    $query = "UPDATE $this->table SET $paraList WHERE $pk = :pk";
		    $record['pk'] = $record[$pk];
		    $statement = $pdo->prepare($query);
		    $statement->execute($record);
		}
		//function of select statemenet
		function selectQuery($field, $value) {
		    global $pdo;
		    //select query
		    $statement = $pdo->prepare("SELECT * FROM $this->table WHERE $field = :value");
		    $criteria = [
		            'value' => $value
		    ];
		    $statement->execute($criteria);
		    return $statement;
		}
		// function of select all query
		function selectAllQuery() {
		    global $pdo;
		    $statement = $pdo->prepare("SELECT * FROM $this->table");
		    $statement->execute();
		    return $statement;
		}
		//function to select statement with limit
		function selectLimitQuery($limitVal) {
		    global $pdo;
		    $statement = $pdo->prepare("SELECT * FROM $this->table LIMIT $limitVal");
		    $statement->execute();
		    return $statement;
		}
		//function to select the last id in the table
		function selectOneQuery($col_name) {
		    global $pdo;
		    $statement = $pdo->prepare("SELECT MAX($col_name) FROM $this->table");
		    $statement->execute();
		    return $statement;
		}
		//function to delete
		function deleteQuery($field, $value) {
		    global $pdo;
		    $statement = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
		    $criteria = [
		            'value' => $value
		    ];
		    $statement->execute($criteria);
		    return $statement;
		}
		//function that join the table with primary key
		function joinWithId($second_tbl, $pkid, $value){
			global $pdo;
		    $statement = $pdo->prepare("SELECT * FROM $this->table INNER JOIN $second_tbl WHERE $this->table.$pkid = $second_tbl.$pkid AND $pkid = $value");
		    $statement->execute();
		    return $statement;
		}
	}
?>