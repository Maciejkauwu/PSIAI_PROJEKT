<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Sleepscape</title>
    <link rel="stylesheet" type="text/css" href="../css/text.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <header>
        <h1>Sleepscape</h1>
        <nav>
            <a href="login.html">Login</a>
            <a href="signup.html">Signup</a>
        </nav>
    </header>

    <div class="filler">
    </div>

    <div class="signup-container">
        <h2>Signup</h2>

        <form method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Signup">
        </form>
    </div>

    <div class="filler2">
    </div>

    <footer>
        <p>&copy; 2023 Sleepscape.</p>
    </footer>
</body>

</html>