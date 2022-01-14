<link href="./Style/style.css" rel="stylesheet">
<body>
    <main>
        <?php
            foreach ($planning as $plan)
            {
                echo 'Réservé par : <br>'.$plan['login'].'<br><br>'.
                    'Nom de la réservation : <br>'.$plan['titre'].'<br><br>'.
                    'Départ à : <br>'.$plan['debut'].'<br><br>'.
                    'Fin à : <br>'.$plan['fin'].'<br>';
            }
        ?>
    </main>
</body>
</html>