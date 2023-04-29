<?php
// clear all the session variables and redirect to index
session_start();
session_unset();
session_write_close();

echo "<script>if(confirm('You have Successfully Logout!')){document.location.href='./index.php'}</script>";
exit();
?>