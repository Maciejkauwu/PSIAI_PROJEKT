<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel - Sleepspace</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/text.css">
</head>
<body>
    <header>
        <h1>Sleepspace</h1>
        <nav>
            <a href="login.html">Login</a> 
            <a href="signup.html">Signup</a>
            <a href="main.html">Główna</a>
            <a href="platnosc.html">płatność</a>
        </nav>
    </header>
    <div class="opis">
        <table>
            <tr>
                <th>Pokój</th>
                <th>Cena za 24h/os</th>
                <th>Liczba łóżek</th>
                <th>Liczba łazienek</th>
                <th>Rozmiar w m^2</th>
                <th>Możliwość pobytu ze zwierzęciem</th>
                <th>Dodatkowe informacje</th>
            </tr>
            <!-- Tu idzie kod PHP, który pobiera dane o pokoju z bazy danych i generuje wiersze tabeli 
            <?php
            // Przykładowe dane z bazy danych
            $pokoj = [
                "pokoj" => "Standardowy",
                "cena" => "100 zł",
                "lozka" => 2,
                "lazienki" => 1,
                "rozmiar" => 20,
                "zwierzeta" => "Tak",
                "dodatkowe_informacje" => "Widok na morze"
            ];
            ?>
            <tr>
                <td><?php echo $pokoj["pokoj"]; ?></td>
                <td><?php echo $pokoj["cena"]; ?></td>
                <td><?php echo $pokoj["lozka"]; ?></td>
                <td><?php echo $pokoj["lazienki"]; ?></td>
                <td><?php echo $pokoj["rozmiar"]; ?> m^2</td>
                <td><?php echo $pokoj["zwierzeta"]; ?></td>
                <td><?php echo $pokoj["dodatkowe_informacje"]; ?></td>
            </tr> -->
        </table>
    </div>
    <div name="uprawnienia">
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <label for="admin">Uprawnienia Administratora:</label>
            <select name="admin" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <br><br>
            <input type="submit" name="Zmień uprawnienia" value="Update">
        </form>
    </div>
    <div name="metody_platnosci">
        <form>
            <label for="metoda">Nazwa metody płatności:</label>
            <input type="text" name="metoda"><br>
            <input type="submit" value="Dodaj">
        </form>
    </div>
    <div class="opis">
        <table>
            <tr>
                <th>Data przyjazdu</th>
                <th>Data wyjazdu</th>
                <th>Liczba osób</th>
                <th>Numer pokoju</th>
                <th>Usuń rezerwacje</th>
            </tr>
            <!--php'owska magia z tabelką, będzie się wyświetlać każda rezerwacja zrobiona,
             obok guzik do usunięcia jej-->
        </table>
    </div>
    <footer>
        <p>&copy; 2023 Sleepscape.</p>
    </footer>
</body>
</html>
