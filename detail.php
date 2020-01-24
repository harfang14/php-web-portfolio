<?php
$id = isset($_GET['id'])?$_GET['id']:0;
require "includes/functions.php"; 
$picture = findOneById($id);
//var_dump($picture);
$src = 'images/large/' . $picture['slug'] . '.jpg';

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Shot</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
</head>
<body id="detail">
    <header>
        <a href="index.html">
            <img src="css/logo.png" alt="Morgan Dawkins - Freelance Photograph">
        </a>
    </header>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $picture['title']?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <img src= "<?php echo $src;?>"/>
                <!-- Picture date and location -->
                <figcaption><?php echo $picture['date'] . " - " . $picture['location']; ?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $picture['description'];?></p>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                </a>
                <a href="gallery.html" class="btn">
                    Next shot
                </a>
            </p>
        </div>
    </main>
    <footer>
        <div class="container">
            <ul>
                <li>
                    <a href="index.html" title="Photograph">Home</a>
                </li>
                <li>
                    <a href="gallery.html" title="My shots">Gallery</a>
                </li>
                <li>
                    <a href="contact.html" title="Contact form">Contact</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>
