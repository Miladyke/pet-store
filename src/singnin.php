<?php
include('config/database.php');
$email = $_POST['e_mail'];
$passw = $_POST['p_assw'];
//$hashed_password = password_hash($passw, PASSWORD_DEFAULT);
$hashed_password = $passw
$hashed_password = password_hash($passw, PASSWORD_DEFAULT);
$sql="
select 
u.id,
    count(u.id) as total
    from 
        users u
        where
            email='$email' and 
            password ='$passw' 
            group by id";
            $res =pg_query($conn,$sql);
            if($res){
                $row =pg_fetch_assoc($res);
                if($row['TOTAL']>0){
                    header( 'refresh: 0; URL = http://localhost/pet_store/src/home.php');
                }else{
                    echo"login failed!!";
                
                }
            }
?>