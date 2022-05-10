<?php
function selectalldata($table)
{
  $select = "SELECT * FROM $table";
  $select1 = mysqli_query($GLOBALS['connect'], $select);
  return $select1;
}

function selectdatabyid($table, $id, $struktur)
{
  $select = "SELECT * FROM $table where $struktur= '$id'";
  $select1 = mysqli_query($GLOBALS['connect'], $select);
  return mysqli_fetch_array($select1);
}

function insert($data, $table)
{
  $columns = "";
  $values = "";

  foreach ($data as $column => $value) {
    $columns .= ($columns == "") ? "" : ", ";
    $columns .= $column;
    $values .= ($values == "") ? "" : ", ";
    $values .= $value;
  }
  $insert = ("INSERT INTO $table ($columns) VALUES ($values)");
  return mysqli_query($GLOBALS['connect'], $insert);
}

function update($data, $table, $where, $struktur)
{
  foreach ($data as $coloum => $value) {
    $update = ("UPDATE $table SET $coloum = $value WHERE $struktur= '$where'");
    mysqli_query($GLOBALS['connect'], $update);
  }
  return true;
}

function deletedata($table, $where, $struktur)
{
  $delete = ("DELETE FROM $table WHERE $struktur=$where");
  mysqli_query($GLOBALS['connect'], $delete);
  return true;
}
