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
        <label for="username">Enter your user name:</label>
        <input type="text" name="username" required><br>
        <label for="text">Enter your text here:</label>
        <textarea name="text" cols="40" rows="3" required></textarea>
        <input type="submit" value="Create your file">
    </form>
</body>
</html>
