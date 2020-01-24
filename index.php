<?php
require 'includes/functions.php';

$homePictures =findPaged(4);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Home</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
</head>
<body id="home">
    <header>
        <a href="index.php">
            <img src="css/logo.png" alt="Morgan Dawkins - Freelance Photograph">
        </a>
    </header>
    <main>
        <div id="hero">
            <h1>I love photography</h1>
        </div>
        <div class="container">
            <div class="row">
                <div id="content" class="column">
                    <h2 class="content-head">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p>
                        Aliquam sed dolor mi. Maecenas eu tortor neque. Phasellus ornare, purus sit
                        amet ultricies fermentum, erat ex sollicitudin odio, at aliquam quam ex non
                        risus. Quisque sit amet tincidunt nisl. Quisque mauris nisl, interdum quis
                        dapibus nec, blandit eget augue. Cras fringilla, enim sed euismod scelerisque,
                        leo tellus viverra massa, nec congue sem nisi ut turpis. Nam eu ipsum sed eros
                        fringilla maximus a non augue. Orci varius natoque penatibus et magnis dis
                        parturient montes.
                    </p>
                </div><!-- end first column -->
                <div class="column">
                    <p class="content-head pictures">
                        <a class="btn" href="gallery.html" title="See all pictures">
                            See all shots
                        </a>
                    </p>
                    
                   
                <div id="pictures">
                <?php
                    foreach ($homePictures as $picture)
                    {
                        $src='images/small/'. $picture['slug'] . '.jpg';
                    ?>
                    
                    <a href="detail.php?id=<?php echo $picture['id'] ?>"title="Picture 1">

                        <img src= "<?php echo $src; ?>">
                    </a>
                    <?php
                    }
                    ?>
                    </div>
            </div><!-- end row -->
            <p id="home-contact">
                <a class="button" href="contact.html" title="Formulaire de contact">
                    Contact me
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
