<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>

    <div class="login-container">
        <h2>Signup</h2>
        <form action="includes/formhandler.inc.php" method="POST">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required />
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required />
            </div>

            <div class="input-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Enter your password" required />
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <div class="login-container">
        <h2>Search</h2>
        <form action="search.php" method="post">
            <input type="text" name="usersearch" placeholder="Search..." required>
            <button type="submit">Search</button>
        </form>

    </div>

</body>

</html>