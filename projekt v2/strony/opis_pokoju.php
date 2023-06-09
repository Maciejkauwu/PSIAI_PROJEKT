<!DOCTYPE html>
<link rel="stylesheet" href="all.css">
<link rel="stylesheet" type="text/css" href="../css/text.css">
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opis Pokoju - Sleepspace</title>
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <header>
        <h1>Sleepscape</h1>
        <nav>
            <a href="login.html">Wyloguj</a>
            <a href="main.html">Strona Główna</a>
            <a href="twoje_rezerwacje.html">Twoje rezerwacje</a>
        </nav>
    </header>

    <div class="opis">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "nazwaBazy");

            $sql = "SELECT * FROM nazwaTabeli";

            $result = $conn->query($sql);

            echo "<table>";
            echo "<tr><th>Pokój</th><th>Cena za 24h/os</th><th>Liczba łóżek</th><th>Liczba łazienek</th><th>Rozmiar w m^2</th><th>Możliwość pobytu ze zwierzęciem</th><th>Dodatkowe informacje</th>";

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {   

                echo "<tr><td>";
                echo $row['firstRow'];
                echo "</td><td>";
                echo $row['secondRow'];
                echo "</td><td>";
                echo $row['thirdRow'];
                echo "</td><td>";
                echo $row['fourthRow'];
                echo "</td><td>";
                echo $row['fithRow'];
                echo "</td></tr>";
            }

            echo "</table>"
?>
    </div>

    <div id="cena">
        <form class="form_cena">
            <label for="poczatek">Data przyjazdu:</label>
            <input type="date" name="poczatek">

            <label for="koniec">Data wyjazdu:</label>
            <input type="date" name="koniec">

            <label for="no_osob">Liczba osób:</label>
            <input type="number" name="no_osob">

            <label for="zwierzeta">Czy zwierzęta?</label>
            <input type="checkbox" name="zwierzeta">

            <input type="submit" value="Sprawdź Cenę!" name="submit" id="button">
        </form>

        <table class="tabela_cena">
            <tr>
                <th>HotelNazwa</th>
                <th>Liczba dni</th>
                <th>Liczba osób</th>
                <th>Czy Zwierzęta?</th>
                <th>Wymarzony Pokój już od:</th>
            </tr>
            <!-- kalkulator php, który obliczy i wyświetli wynik na podstawie danych z formularza -->
        </table>
    </div>

    <div class="rezerwuj">
        <!-- duży zielony przycisk "Rezerwuj już teraz" -->
        <input type="submit" value="REZERWUJ JUŻ TERAZ" name="rezerwuj">
        <!-- jeśli pokój nie jest dostępny w danym terminie, wyświetl jakiś komunikat błędu na górze strony lub w jego miejsce -->
        <!-- Po kliknięciu przekieruj do płatności -->
    </div>

    <footer>
        <p>&copy; 2023 Sleepscape.</p>
    </footer>
</body>
</html>