<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p>
   <?php echo "$output"; ?>
   </p>
    <form action="?" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
