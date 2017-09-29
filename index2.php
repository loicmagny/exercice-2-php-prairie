<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$text1= "La Vie aquatique (The Life Aquatic with Steve Zissou), film américain sorti en 2004, est le quatrième long-métrage réalisé par Wes Anderson. Il est dédié à l'océanographe français Jacques-Yves Cousteau et s'inspire librement de sa vie sur un ton parodique. Le film est une comédie dramatique qui, sous un aspect fantaisiste, aborde des thèmes forts comme la famille, le deuil, la vengeance, l'angoisse de vieillir ou l'échec.";
$text2= str_replace("e", "", $text1);
echo $text2;
?>
  </body>
</html>
