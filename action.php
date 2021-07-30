<?php




$user_email=$_POST['user_email'];

echo "<br>$user_email";

$user_name=$_POST['user_name'];

echo "<br>$user_name";

$user_phone=$_POST['user_phone'];

echo "<br>$user_phone";



$db_host_name="localhost";

$db_user="dbm_gjimt";

$db_user_password="gjimt123";

$db_name="db_gjimt";




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





$table_name="tbl_students";

$query_name="select * from $table_name";

echo "<br>$query_text";



if($record_set=mysqli_query($connection,$query_text))

{

$roecount=mysqli_query($record_set);

echo "<br>Result set has",$roecount,"rows";

}




$query_text="insert into tbl_students (user_name,user_email) values('$user_name','$user_email')";



echo "<br>query_text=$query_text";


if($result1=mysqli_query($connection, $query_text))

{

echo "<br>New Record inserted";

}

else

{

echo "<br>Failed to add New record";

}









?>
