<?php
// Erstelle 3 Song-Objekt in php mit jeweils einer id, einem Titel und dem Namen des Interpreten
// Erstelle in der index.php einen Knopf, der per Ajax diese 3 Objekte vom Server in einem Array im JSON-Format
// zurückgeliefert bekommt.
// Dieser string soll ausgelesen werden und der Inhalt der Objekte in jeweils einer Zeile ausgegeben werden.
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs</title>
    <script defer src="js/ajax.js"></script>
</head>
<body>
<div id="btn1">
    <button>Do it</button>
</div>
<div id="result">

</div>
</body>
</html>
