<?php

$cust_ser_no=$_POST['cust_ser_no'];

$cust_pass=$_POST['cust_pass'];

$db_host_name="localhost";

$db_user="dbm_shop";

$db_user_password="gjimt123";

$db_name="db_shop";




$connection=
mysqli_connect($db_host_name,$db_user,$db_user_password,$db_name);



mysqli_select_db($db_name);


$table_name="tbl_customers";

$query_name="select * from $table_name";


$query_text="insert into tbl_customers (cust_ser_no,cust_pass);






?>
