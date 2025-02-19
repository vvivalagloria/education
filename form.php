<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>        
        <input type="text" name="email" placeholder="E-mail"><br><br>
        
        <button>Signup</button>
    </form>
</body>
</html>