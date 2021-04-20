<html>
    <head>

    </head>
    <body>
        <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>    
        <h3>Psa widzieli: </h3>
        <?php
            $i = 1;
            $dbc = mysqli_connect('localhost', 'root','','aliendb_wel18ec1s1') or die('Błąd podczas łączenia z bazą danych SQL.');
            $query = "SELECT * FROM aliens_abduction WHERE fang_spotted = 'tak'";
            $result = mysqli_query($dbc, $query) or die ('Wystąpił problem podczas przetwarzania zapytań do bazy SQL');
            while ($row = mysqli_fetch_array($result)){
                $to = $row['email'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                echo $i.' '.$first_name.' '.$last_name.' ('.$to.')<br/>';
            }
            mysqli_close($dbc);

        ?>
    </body>
</html>