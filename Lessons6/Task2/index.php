<?php


if (!isset($_POST['userlogin']))
    {
    $output= 'Please, enter the Login and pass in form:';
    include 'output.html.php';
    exit();
}
else
{
    try
    {
      $pdo = new PDO('mysql:host=localhost;dbname=kalash', 'kalash', 'neo66569');
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
    $stmt = $pdo->prepare('SELECT id FROM user WHERE name = :login');
    $stmt->execute(array('login' => $_POST['userlogin']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
         if (!empty($row['id'])) {
         $output='Sorry, your login is already exist';
         include 'output.html.php';
         exit;
        }
    }
    catch (PDOException $e)
    {
      $output = 'Unable to check your login name' .$e->getMessage();
      include 'output.html.php';
      exit();
    }
   
    try
    {
        $sql = 'INSERT INTO user SET
            name= :name,
            password = :password';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['userlogin']);
        $s->bindValue(':password', md5($_POST['password']));
        $s->execute();
      }

    catch (PDOException $e)
    {
      $output = 'Error, while creating a table:' . $e->getMessage();
      include 'output.html.php';
      exit();
    }
    print 'Your login and password was created';
    exit();

}
