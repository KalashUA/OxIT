<?php
if (!isset($_POST['login']))
{
$output= 'Enter your login and password';
include 'index.html.php';
exit();
}

else if ($_POST['login']=='admin' and $_POST['password']=='qwerty') {
    session_start();
    $_SESSION['username'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    print 'Welcome '. $_SESSION['username'].'<br>';
    print "<a href='logout.php'>Log Out</a>";
    exit();
}

else {
    $output= 'Incorect login or password';
    include 'index.html.php';
    exit ();
}
    
    