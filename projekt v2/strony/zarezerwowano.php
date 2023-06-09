<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarezerwowano - Sleepspace</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" type="text/css" href="../css/all.css">
</head>

<body>
    <header>
        <h1>Sleepspace</h1>
        <nav>
            <a href="login.html">Wyloguj</a>
            <a href="main.html">Strona Główna</a>
            <a href="twoje_rezerwacje.html">Twoje rezerwacje</a>
        </nav>
    </header>

    <div class="filler">
    </div>

    <div>
        <h1>Zarezerwowano!</h1>

        <h2>Twoim numerem rezerwacji jest</h3>
            <h3>
                <?php echo $_POST["idRezerwacji"]; ?>
        </h2>

        <h3>Będziemy oczekiwali twojego przyjazdu</h3>
        <h3>
            <?php echo $_POST["nazwaUzytkownika"]; ?>, życzymy udanej podróży!
        </h3>

        <!-- jakis fajny css zdj w tle jakies wakacyjne czy cosik sam nie wiem-->

        <a href="main.html">POWRÓT NA STRONĘ GŁÓWNĄ</a>
    </div>

    <div class="filler2">
    </div>

    <footer>
        <p>&copy; 2023 Sleepscape.</p>
    </footer>
</body>

</html>