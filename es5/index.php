
<?php

    $Lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore velit, at eos rem voluptates dolorem alias! Id perferendis reprehenderit nemo aut itaque. Ducimus incidunt dolorum accusamus? Officia, culpa dolorum.";

    echo $Lorem;

    $endFile = explode(".", $Lorem);

    var_dump($endFile);

    foreach ($endFile as $paragraph) {
        echo $paragraph;
        echo "<br>";
}