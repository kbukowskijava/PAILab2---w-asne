<html>
    <head>
    </head>
    <body>
        <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>
        <?php
            $name = $_POST['firstname'].' '.$_POST['lastname'];
            $how_many = $_POST['howmany'];
            $what_they_did = $_POST['whattheydid'] ;
            $other = $_POST=['other'] ;
            $when_it_happened = $_POST['whenithappened'] ;
            $how_long = $_POST['howlong'] ;
            $alien_description = $_POST['aliendescription'] ;
            $fang_spotted = $_POST['fangspotted'] ;
            $email = $_POST['email'] ;
            // implode(" ",$other);
            echo $name;
            echo '<br/> Dziękujemy za przesłanie formularza.<br/>';
            echo 'Porwano cię:'.$when_it_happened;
            echo ' i nie było Cię przez'.$how_long.'<br/>';
            echo 'Liczba kosmitów: '.$how_many.'<br/>';
            echo 'Opis kosmitów:'.$alien_description.'<br/>';
            echo 'Działania kosmitów: '.$what_they_did.'<br/>';
            echo 'Czy widziano Kła?'.$fang_spotted.'<br/>';
            echo 'Inne komentarze: '.$other.'<br/>';
            echo 'Adres e-mail:'.$email;
        ?>
    </body>
</html>