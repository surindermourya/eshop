<?php



$cust_ser_no=$_POST['cust_ser_no'];

echo "<br>$cust_ser_no";

$cust_name=$_POST['cust_name'];

echo "<br>$cust_name";

$cust_phone=$_POST['cust_phone'];

echo "<br>$cust_phone";

$cust_email=$_POST['cust_email'];

echo "<br>$cust_email";

$cust_address=$_POST['cust_address'];

echo "<br>$cust_address";

$cust_pass=$_POST['cust_pass'];

echo "<br>$cust_pass";



$db_host_name="localhost";

$db_user="dbm_shop";

$db_user_password="gjimt123";

$db_name="db_shop";




$connection=
mysqli_connect($db_host_name,$db_user,$db_user_password,$db_name);




if(mysqli_connect_errno())

{

echo "<br>Failed to connect to MySQL:".mysqli_connect_error();

}

else

{

echo "<br>Database connection succesfull";

}



echo "<br>Ok upto Check Point 1";




mysqli_select_db($db_name);

echo "<br>OK upto Check Point 2";




$table_name="tbl_customers";

$query_name="select * from $table_name";

echo "<br>$query_text";



if($record_set=mysqli_query($connection,$query_text))

{

$roecount=mysqli_query($record_set);

echo "<br>Result set has",$roecount,"rows";

}






$query_text="insert into tbl_customers(cust_ser_no,cust_name,cust_phone,cust_email,cust_address,cust_pass) values('$cust_ser_no','$cust_name','$cust_phone','$cust_email','$cust_address','$cust_pass')";



echo "<br>query_text=$query_text";


if($result1=mysqli_query($connection, $query_text))

{

echo "<br>You are Registered";

}

else

{

echo "<br>Failed to Register New User";

}








?>
