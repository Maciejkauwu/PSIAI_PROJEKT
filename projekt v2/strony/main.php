<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna - Sleepscape</title>
    <link rel="stylesheet" type="text/css" href="../css/all.css">

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
    <div class="filler">
    </div>
    <div class="container_main">
        <form method="post">
            <label for="poczatek">Data przyjazdu:</label>
            <input type="date" name="poczatek">

            <label for="koniec">Data wyjazdu:</label>
            <input type="date" name="koniec">

            <input type="submit" value="submit">
        </form>
    </div>
    <div class="filler">
    </div>
    <div class="tabela_main">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "nazwaBazy");

            $sql = "SELECT * FROM nazwaTabeli";

            $result = $conn->query($sql);

            echo "<table>";
            echo "<tr><th>Pokój</th><th>Cena za 24h/os</th><th>Dostępność</th><th>Czytaj więcej</th></tr>";

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
                echo "</td></tr>";
            }

            echo "</table>"
    </div>
    <footer>
        <p>&copy; 2023 Sleepscape.</p>
    </footer>
</body>

</html>