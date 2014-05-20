<?php
  // Einleitung
  $hurr[] = array(
    'Unsere Idee ist, ',
    'Wir planen, ',
    'Der Erzengel Metatron hat uns auf die Idee gebracht, ',
  );

  // Warum haben sie Superkräfte?
  $hurr[] = array(
    'hoch energetisierte ',
    'tachyonisierte ',
    'deoxidisierte',
  );

  // Und was?
  $hurr[] = array(
    'Kopfhörer ',
    'Müsliriegel ',
    'Dildos ',
  );

  // Was tun wir?
  $hurr[] = array(
    'mit kosmischen Strahlungen zu bombardieren ',
    'mit Mikrowellen und/oder Skalarwellen aufzuladen ',
    'durch weiße Magie zum schwingen zu bringen ',
  );

  // Und warum?
  $hurr[] = array(
    'um den Benzinverbrauch von Kraftfahrzeugen zu reduzieren.',
    'um das Dirk-Hamer-Syndrom sogenannter Krebspatienten zu behandeln.',
    'um die Mind Control-Versuche der Illuminaten abzuwehren.',
  );
?>
<!DOCTYPE html>
<html>
<head>
<title>Eso-Spinnereien-Generator nach Dr. tka</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.unfug {
font-size:large;
font-family:sans-serif;
margin-left:auto;
margin-right:auto;
width:60%;
} 
</style>
</head>
<body>
<p class="unfug">
<?php
  foreach($hurr as $durr)
    echo $durr[rand(0, count($durr) -1)] . "\n";
?>
</p>
</body>
</html>
