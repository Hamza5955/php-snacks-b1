<?php 

    include __DIR__ . '/database.php';
    include __DIR__ . '/function.php';

    foreach ($studenti as $alunno) {
        echo 'Alunno : ' . $alunno['nome'] . ' ' . $alunno['cognome'] . ' ' . media($alunno['voti']) . '<br/>';
    }
    

?>