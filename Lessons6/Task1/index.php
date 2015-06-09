<?php


if (!isset($_POST['basename']))
{
$output= 'Please, enter the DB values in form:';
include 'output.html.php';
exit();
}

$basename=htmlspecialchars($_POST['basename'], ENT_QUOTES, 'UTF-8');
$login=htmlspecialchars($_POST['userlogin'], ENT_QUOTES, 'UTF-8');
$password=htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
try
{
  $pdo = new PDO("mysql:host=localhost;dbname=$basename", "$login", "$password");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "UTF8"');
}
catch (PDOException $e)
{
  $output = 'Unable to connect to the database server' .$e->getMessage();
  include 'output.html.php';
  exit();
}

try
{
  $sql = "CREATE TABLE $login (
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255),
      password VARCHAR(255)
      ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
  $pdo->exec($sql);
}

catch (PDOException $e)
{
  $output = 'Error, while creating a table:' . $e->getMessage();
  include 'output.html.php';
  exit();
}
$output = 'Table successfully created.';
include 'output.html.php';
exit();