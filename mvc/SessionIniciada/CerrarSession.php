<?php
include ('Session.php');
 session_destroy();
 header('Location: ../../src/login.html');
?>