<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="square grey">
        <?php
            foreach($db as $key => $value){
                if ($key === 'teachers') {
                    foreach($value as $teacher){
                        echo 'Nome: ' . $teacher['name'].'</br>';
                        echo 'Cognome: ' . $teacher['lastname'].'</br>';
                    }
                }
            }
        ?>
    </div>

    <div class="square green">
        <?php
            foreach($db as $key => $value){
                if ($key === 'pm') {
                    foreach($value as $pm){
                        echo 'Nome: ' . $pm['name'].'</br>';
                        echo 'Cognome: ' . $pm['lastname'].'</br>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>