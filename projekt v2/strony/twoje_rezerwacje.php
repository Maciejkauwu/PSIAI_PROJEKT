<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje rezerwacje - Sleepspace</title>
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
    <div class="rezerwacje-container">
        <table class="tabela_rezerwacje">
            <tr>
                <th>Data przyjazdu</th>
                <th>Data wyjazdu</th>
                <th>Liczba osób</th>
                <th>Numer pokoju</th>
                <th>Odwołaj rezerwację</th>
            </tr>
        </table>

        <!--php'owska magia z tabelką, będzie się wyświetlać każda rezerwacja zrobiona,
             obok guzik do usunięcia jej
            Tak tu jest to samo co w admin panelu prawie tylko że tu są tylko rezerwacje po id użytkownika
            -->
    </div>
    <footer>
        <p>&copy; 2023 Sleepscape.</p>
    </footer>
</body>
</html>
