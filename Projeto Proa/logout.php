<?php
session_start();
unset($_SESSION['traira']);
session_destroy();
header('location: home_page.html');
exit();
?>