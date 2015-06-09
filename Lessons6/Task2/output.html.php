<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter form</title>
</head>
<body>
    <p><?php  print htmlspecialchars($output, ENT_QUOTES, 'UTF-8'); ?></p>
    <form action="?" method="POST">
    <label for="login">Enter Login:</label>
    <input type="text" name="userlogin" required>
    <label for="password">Enter the password:</label>
    <input type="password" name="password" required>
    <input type="submit" value="Submit">
    </form>
  
    
</body>
</html>