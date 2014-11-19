<?php

require 'db_connect.php';

// require above script
// change the path to match wherever you put it.


$table = "CREATE TABLE users (
id int(10) DEFAULT '0' NOT NULL auto_increment, 
username varchar(40),
password varchar(50), 
regdate varchar(20),
email varchar(100),
website varchar(150),
location varchar(150),
show_email int(2) DEFAULT '0',
last_login varchar(20),
PRIMARY KEY(id))";

$create = $db_object->query($table);	//perform query

if(DB::isError($create)) {
	die($create->getMessage().'<br><br>');
} else {
	echo 'Table created successfully.<br><br>';

}

$table2 = "CREATE TABLE products (
id int(10) DEFAULT '0' NOT NULL auto_increment, 
name varchar(150),
price decimal(10), 
PRIMARY KEY(id))";

$create = $db_object->query($table2);	//perform query

if(DB::isError($create)) {
	die($create->getMessage());
} else {
	echo 'Table #2 created successfully.<br><br>';

}

$table3 = "CREATE TABLE events (
id int(10) DEFAULT '0' NOT NULL auto_increment, 
date date,
description longtext, 
PRIMARY KEY(id))";

$create = $db_object->query($table3);	//perform query

if(DB::isError($create)) {
	die($create->getMessage());
} else {
	echo 'Table #3 created successfully.<br><br>';

}

$db_object->disconnect()

?>