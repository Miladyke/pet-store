<?php 
/*
$host = "localhost";
$port ="5432";
$dbname= "petstore";
$user = "postgres";
<<<<<<< HEAD
$password="unicesmag";*/
$host = "aws-0-us-east-1.pooler.supabase.com";
$port ="6543";
$dbname= "postgres";
$user = "postgres.hxcxitdierynclzbslju";
=======
$password="unicesmag";
*/

$host = "aws-0-us-east-1.pooler.supabase.com";
$port ="5432";
$dbname= "petstore";
$user = "postgres";
>>>>>>> bafc4380bc7376a4ba57d0bf57c3914674a86913
$password="unicesmag@@";

$data_connection="
   host=$host
   port=$port
   dbname=$dbname
   user=$user
   password=$password
   ";
$conn = pg_connect($data_connection);
if(!$conn){
    echo"conection error";


}else{echo"success !!!";}

//pg_close($conn)

?>