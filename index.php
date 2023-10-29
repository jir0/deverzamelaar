<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verzamelaar</title>
    <link rel="stylesheet" href="./src/css/header.css">
    <link rel="stylesheet" href="./src/css/main.css">
    <link rel="stylesheet" href="./src/css/collect.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header-wrapper">
    <img src="./src/img/logo.png" alt="">
    <ul>
        <li class="button"><a href="">Home</a></li>
        <li><a href="">Verzameling</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</div>

<div class="main-content">
    <ul>
        <li id="watch-titel"><h1>spyro's universe</h1></li>
        <li id="watch-tekst"><p>Ontdek de magische wereld van Skylanders, waar je speelgoed tot leven komt en avonturen tot leven brengt! Verzamel je helden, versla het kwaad en word een legende in Skylands! Koop Skylanders vandaag nog en beleef eindeloos speelplezier!




            </p></li>
    </ul>
        <img src="./src/img/logo.png" alt="">
</div>

<div class="collection-wrapper"> 
    <?php

    include('src/javascript/db.php');
    $stmt = $db->prepare("SELECT naam, kleur, jaar, informatie, img FROM collectie");
    $stmt->execute();

    echo '<div class="collection-container">';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="collection-item">';
        echo '<div class="collection-left">';
        echo '<h3 id="naam">' . $row['naam'] . '</h3>';
        echo '<h3 id="prijs">' . $row['prijs'] . '</h3>';
        echo '<h3 id="aantal">' . $row['aantal'] . '</h3>';
        echo '<h3 id="Jaar">' . $row['jaar'] . '</h3>';
        echo '<p id="informatie">' . $row['informatie'] . '</p>';
        echo '</div>';
        echo '<div class="collection-right">';
        echo '<img src="' . $row['img'] . '" alt="">';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    ?>
</div>

</body>
</html>