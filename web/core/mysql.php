<?php
  function connect(){
    $host = 'localhost';
    $user = 'root';
    $pass = 'mysql';
    $dtbs = 'HaruptDB';
    $connect = mysqli_connect($host, $user, $pass, $dtbs);
    if(!$connect) die('Connect Error : '.mysqli_connect_error());
    else return $connect;
  }

  function get($tableName, $field, $value){
    $value = "'".escape($value)."'";
    $query = "SELECT * FROM `{$tableName}` WHERE {$field} = {$value}";
    $sql = mysqli_query(connect(), $query);
    $data = mysqli_fetch_assoc($sql);
    if(!empty($data)) return $data;
    return false;
  }

  function insert($tableName, $fields = array()){
    $i = 0;
    foreach ($fields as $key => $values) {
      if (is_int($values)) { $value[$i] = escape($values); }
      else { $value[$i] = "'".escape($values)."'"; }
      $column[$i] = "`".escape($key)."`";
      $i++;
    }
    $columns = implode(", ", $column);
    $values = implode(", ", $value);
    $query = "INSERT INTO `{$tableName}` ({$columns}) VALUES ({$values})";
    if (mysqli_query(connect(), $query)) return true;
    return false;
  }

  function update($table, $column, $colval, $fields = []){
    $result = "";
    $colval = escape($colval);
    if (!is_int($colval)) $colval = "'".$colval."'";
    foreach ($fields as $key => $value) {
      if (is_int($value)) $value = escape($value);
      else $value = "'".escape($value)."'";
      $updateStr = $key.'='.$value.', ';
      $result .= $updateStr;
    }
    $result = substr($result, 0, strrpos($result , ','));
    $query = "UPDATE {$table} SET {$result} WHERE {$column} = {$colval}";
    if (mysqli_query(connect(), $query)) return true;
    return false;
  }

  function delete($table, $column, $colval){
    $colval = escape($colval);
    if (!is_int($colval)) $colval = "'".$colval."'";
    $query = "DELETE FROM {$table} WHERE {$column} = {$colval}";
    if (mysqli_query(connect(), $query)) return true;
    return false;
  }

  function escape($str){
    return mysqli_real_escape_string(connect(), $str);
  }
?>
