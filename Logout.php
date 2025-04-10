<?php
session_start(); 
unset($_SESSION['login']);
header('Location: Login.php');
// echo "<script>
// setTimeout(function() {
//     window.location.href = 'Login.php';
// }, 2000);
// </script>";

?>