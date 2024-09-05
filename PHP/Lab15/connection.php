<?php
/** 
 * Connection with data base
 * 
 * ===> carditionals
 *{
 * database type
 * datbase name
 * host name
 * user name
 * password
 * }
 */



$dbType="mysql";
$host="localhost";
$dbName="test";
$userName="root";
$password="";

$connection=new PDO("$dbType:host=$host;dbname=$dbName",$userName,$password);



?>