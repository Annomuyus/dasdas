<?php
include("konek.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="select * from userlogin where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("Location:index.php");
    }else{echo'<script>
        window.location.href = "index.php";
        alert("Login failed")
        </script>';
    }
}
?>