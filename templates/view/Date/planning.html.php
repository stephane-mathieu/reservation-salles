<body class="planning">
        <div class="content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th></th>
                        <?php
                            for($i =0 ;isset($semaine[$i]) && isset($jourTexte[$i]);$i++) {
                                echo '<th class="text-white" id="t_head">'.$jourTexte[$i].' '.$semaine[$i].'</th>';
                            }
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($h=1; isset($plageH[$h]); $h++) {
                                echo '<tr>';
                                echo '<td class="text-white" class="" id="plage_h">'.$plageH[$h].'</td>';
                                for ($j=0 ; isset($semaine[$j]); $j++) {
                                    $weekdate = date("d-m-y", mktime(0,0,0,date("n"),date("d")-$jour+$j+1,date("y")));
                                    echo '<td class="text-white" class="" id="empty_td">';
                                    foreach($planning as $value)
                                    {
                                        $debut = $value['debut'];
                                        $titre = $value['titre'];
                                        $login = $value['login'];
                                        $time = strtotime($debut);
                                        $jourdebut = date("d-m-y", $time);
                                        $heuredebut = date("H:00", $time);
                                        if ( ($jourdebut == $weekdate) && ($heuredebut == $plageH[$h]))  
                                        {
                                            echo '<div class="contevent text-white"><a id="lienevent" href=reservation.php?val='.$value['id'].'>';
                                            echo '<div class="titreevent text-white">'.$titre.'</div>' ;
                                            echo '<div class="loginevent text-white">'.$login.'</div>' ;
                                            echo '</a></div>';
                                        }
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
        </div>
</body>