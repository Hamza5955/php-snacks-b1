<?php
$team = [
   [
      "squadraCasa" => "Olimpia Milano",
      "squadraOspite" => "Cantù",
      "pcasa" => rand(1, 100),
      "pospite" => rand(1, 100),
   ],
   [
      "squadraCasa" => "Juve",
      "squadraOspite" => "Napoli",
      "pcasa" => rand(1, 100),
      "pospite" => rand(1, 100),
   ],
   [
      "squadraCasa" => "Inter",
      "squadraOspite" => "Roma",
      "pcasa" => rand(1, 100),
      "pospite" => rand(1, 100),
   ],
   [
    "squadraCasa" => "Milan",
    "squadraOspite" => "Lazio",
    "pcasa" => rand(1, 100),
    "pospite" => rand(1, 100),
 ],
];

for ($i = 0; $i < count($team); $i++) {
   echo "<h1>" . $team[$i]["squadraCasa"] . " - " . $team[$i]["squadraOspite"] . " | "
      . $team[$i]["pcasa"] . "-" . $team[$i]["pospite"] . "</h1>";
}
?>