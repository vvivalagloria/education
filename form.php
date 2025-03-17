<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Search</h1>
    <form action="search.php" method="post">
        <lable for="search">Search for user:</lable><br><br>     
        <input id="search" type="text" name="usersearch" placeholder="Search..."><br><br>       
        <button>Search</button>
    </form>
    <h1>Signup</h1>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>        
        <input type="text" name="email" placeholder="E-mail"><br><br>       
        <button>Signup</button>
    </form>

    <h1>Change account</h1>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>        
        <input type="text" name="email" placeholder="E-mail"><br><br>      
        <button>Update</button>
    </form>

    <h1>Delete account</h1>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>               
        <button>Delete</button>
    </form>
</body>
</html>