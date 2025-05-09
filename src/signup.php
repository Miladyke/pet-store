<?php
include('config/database.php');
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['e_mail'];
$passw = $_POST['p_assw'];

$hashed_password = password_hash($passw, PASSWORD_DEFAULT);
$hashed_password = $passw



$sql_validete_email="
select count(id) as total
from users
where email='$email' and 
status =true

";
$ans = pg_query($conn, $sql);
if($ans){
    echo"<script>alert('User has been created.Go to login')</script>";
    header('Refresh:0;URL=http://localhost/pet-store/src/signin.html');
}else{
<<<<<<< HEAD
$sql = "INSERT INTO users
    (firstname,lastname,email,password)
    VALUES ('$fname','$lname','$email','$hashed_password')
    ";
    $ans = pg_query($conn,$sql);
    if($ans){
       // echo "user has been created successfully";
       echo "<script>alert('user has been created successfully')</script>";
       header('Refresh:0;url=http://localhost/pet-store/src/signin.html');
    }else{
        echo"error";
    }   
   }
}else{
    echo"Query Error";
=======
    echo "Error";
>>>>>>> bafc4380bc7376a4ba57d0bf57c3914674a86913
}
    }

}else{
echo "Query error";
}
?>