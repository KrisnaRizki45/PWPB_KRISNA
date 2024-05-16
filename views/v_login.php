<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dok</title>
    <link href="styles/cape.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form class="form-horizontal" action="login.php" method="POST">
        <h1>Welcome</h1>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username"/>
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <button type="submit" class="button-login">Login</button>
        </div>      
    </form>
</body>
</html>