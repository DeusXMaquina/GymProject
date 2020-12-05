<?php

  class Database {
    #Attibutes
    public $hostname;
    public $username;
    public $password;
    public $database;

    #Constructor
    public function __construct($hostname, $username, $database){
    $this -> hostname = $hostname;
    $this -> username = $username;
    #$this -> password = $password;
    $this -> database = $database;
    }
    
    #Method
    public function testconnect(){
      $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
      if ($connection -> connect_error) {
          die("Connection failed: ".$connection -> connect_errno);
      }
      return "Connected successfully";
    }

    # method to read items from a table, table must be a string, returns an array with all the values from a table
    public function read($table){
      $readResult = array();
      $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
      if ($connection -> connect_error) {
        die("Connection failed: ".$connection -> connect_errno);
      }
      $query = "SELECT * FROM $table";
      $result = $connection -> query($query);
      if ($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
          array_push($readResult, $row);
        }
      }
      $connection -> close();
      return $readResult;
    }

    # method to create a new item on a specific table, table must be a string, fieldNames and values must be string arrays.
    public function create($table, $fieldNames, $values){

      # function to build a string with values that SQL can Read
      if (!function_exists('buildString')) {
        function buildString ($array, $stringFlag) {
          $finalString = '';
          $length = count($array);
          if ($stringFlag) {
            for ($index = 0; $index < $length; $index++) {
              if ($index == $length -1) {
                $finalString .= $array[$index];
              } else {
                $finalString .= $array[$index] .', ';
              }
            }
          } else {
            for ($index = 0; $index < $length; $index++) {
              if ($index == $length -1) {
                $finalString .= "'".$array[$index]."'";
              } else {
                $finalString .= "'".$array[$index]."'" .', ';
              }
            }
          }
          return $finalString;
        }
      }

      $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
      if ($connection -> connect_error) {
        die("Connection failed: ".$connection -> connect_errno);
      }
      
      $fieldString = buildString($fieldNames, true);
      $valuesString = buildString($values, false);
      $query = "INSERT INTO $table ($fieldString) VALUES ($valuesString);";

      if ($connection -> query($query) === true) {
        return "New record created successfully";
      } else {
        return "Error: ".$query."<br>".$connection -> error;
      }
      $connection -> close();
    }

    # method to update info from table, table, colunmName and findValue must be strings, updateFields and updateValues must be an array
    public function update($table, $updateFields, $updateValues, $columnName, $findValue) {

      # function to build the SET sentence for MySQL
      if(!function_exists('buildUpdateString')) {
        function buildUpdateString($fieldsArray, $valuesArray) {
          $finalString = '';
          $length = count($fieldsArray);
            for ($index = 0; $index < $length; $index++) {
              if ($index == $length -1) {
                $finalString .= $fieldsArray[$index]."='".$valuesArray[$index]."' ";
              } else {
                $finalString .= $fieldsArray[$index]."='".$valuesArray[$index]."', ";
              }
            }
          return $finalString;
        }
      }
      
      
      $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
      if ($connection -> connect_error) {
        die("Connection failed: ".$connection -> connect_errno);
      }

      $setString = buildUpdateString($updateFields, $updateValues);

      $query = "UPDATE $table SET $setString WHERE $columnName = '$findValue'";

      if ($connection -> query($query) === true) {
        return "Record updated successfully";
      } else {
        return "Error: ".$query."<br>".$connection -> error;
      }
      $connection -> close();
    }

    public function delete($table, $columnName, $value) {
      $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
      if ($connection -> connect_error) {
        die("Connection failed: ".$connection -> connect_errno);
      }

      $query = "DELETE FROM $table WHERE $columnName = '$value'";
      if ($connection -> query($query) === true) {
        return "Record deleted successfully";
      } else {
        return "Error: ".$query."<br>".$connection -> error;
      }
      $connection -> close();
    }
  }

?>
