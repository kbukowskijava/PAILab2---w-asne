<html>
    <head>
    </head>
    <body>
        <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>
        <link rel="stylesheet" href="style.css" type="text/css">
        <?php
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $name = $_POST['firstname'].' '.$_POST['lastname'];
            $when_it_happened = $_POST['whenithappened'] ;
            $email = $_POST['email'];
            $how_long = $_POST['howlong'] ;
            $how_many = $_POST['howmany'];
            $alien_description = $_POST['aliendescription'] ;
            $what_they_did = $_POST['whattheydid'] ;
            $fang_spotted = $_POST['fangspotted'] ;
            $other = $_POST['other'] ;

            $dbc = mysqli_connect('localhost', 'root','','aliendb_wel18ec1s1') or die('Błąd podczas łączenia z bazą danych SQL.');

            $query = "INSERT INTO aliens_abduction(first_name, last_name, when_it_happened, how_long, how_many, alien_description, what_they_did, fang_spotted, other, email) VALUES ('$first_name','$first_name','$last_name','$when_it_happened','$how_long', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";

            $result = mysqli_query($dbc, $query) or die ('Wystąpił problem podczas przetwarzania zapytań do bazy SQL');

            mysqli_close($dbc);

            echo 'Zgłoszenie wygenerowane na prośbę użytkownika: <br/>';
            print "<h3>".$name."</h3>";
            echo '<br/> <b>Dziękujemy za przesłanie formularza.</b><br/>';
            echo 'Porwano cię: '.$when_it_happened;
            echo ' i nie było Cię przez '.$how_long.'<br/>';
            echo 'Liczba kosmitów: '.$how_many.'<br/>';
            echo 'Opis kosmitów:'.$alien_description.'<br/>';
            echo 'Działania kosmitów: '.$what_they_did.'<br/>';
            echo 'Czy widziano Kła: '.$fang_spotted.'<br/>';
            echo 'Inne komentarze: '.$other.'<br/>';
            echo 'Adres e-mail: '.$email;
        ?>
    </body>
</html>