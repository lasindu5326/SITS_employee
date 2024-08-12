<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Register Form</h1>
    <form action="data.php" method="post">
       
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
