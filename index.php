<!-- Esercizio:
Creare una variabile con un paragrafo di
testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre asterischi. -->

<?php
  $titolo = "Er medico m'ha detto";
  $autore = "Aldo Fabrizi";
  $poesia = "
  Commenda caro, è duopo che lo dica
ma l'italiano, escluso il proletario,
pappa tre volte più del necessario,
sottoponendo il cuore a 'na fatica.

Di fame, creda, non si muore mica,
piuttosto accade tutto l'incontrario,
e chi vol diventare centenario
deve evità perfino la mollica.

Perciò m'ascolti, segua il mio dettame;
io quando siedo a tavola non m'empio
e m'alzo sempre avendo ancora fame!

Embè quanno che ar medico ce credin
bisogna daje retta: mò, presempio,
l'urtimo piatto me lo magno in piedi!";
  // $array_poesia = explode(".", $poesia);
  $array_poesia = preg_split('/ (.|!) /', $poesia);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP tests</title>
  </head>
  <body>
    <div id="container">
      <div id="poem">
        <h1><?php echo $titolo; ?></h1>
        <p><?php echo nl2br($poesia); ?></p>
        <p>by: <?php echo $autore; ?></p>
      </div>
      <div id="new_poem">
        <h1><?php echo $titolo; ?></h1>
        <p><?php echo str_replace("Commenda", "Marco", $poesia); ?></p>
        <p>by: <?php echo $autore; ?></p>
      </div>
      <div id="array_poem">
        <h1>Test su array</h1>
        <p><?php var_dump($array_poesia); ?></p>
        <p>lunghezza stringa: <?php echo strlen($poesia); ?></p>
      </div>
    </div>
  </body>
</html>
