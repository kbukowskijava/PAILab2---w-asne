<html>
    <head>
    </head>
    <body>
        <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>
        <link rel="stylesheet" href="style.css" type="text/css">
        <?php
            $name = $_POST['firstname'].' '.$_POST['lastname'];
            $when_it_happened = $_POST['whenithappened'] ;
            $email = $_POST['email'];
            $how_long = $_POST['howlong'] ;
            $how_many = $_POST['howmany'];
            $alien_description = $_POST['aliendescription'] ;
            $what_they_did = $_POST['whattheydid'] ;
            $fang_spotted = $_POST['fangspotted'] ;
            $other = $_POST['other'] ;
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