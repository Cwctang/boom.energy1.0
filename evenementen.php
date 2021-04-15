<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style/evenementen.css" rel="stylesheet" type="text/css">
    <script src="./js/code.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
</head>
<header>
    <img src="./img/Logo Energy.png" class="logo">
    <p id="drop-nav">&#9776;</p>
    <article id="nav-box">
        <nav id="menu">
            <a href="index.html">Homepage</a>
            <a href="bedrijfsinfo.html">Bedrijfsinfo</a>
            <a href="evenementen.php">Nieuws & Evenement</a>
            <a href="aanbiedingen.php">Aanbiedingen</a>
            <a href="webshop.html">Webshop</a>
            <a href="contact.html">Contact</a>
        </nav>
    </article>
</header>
<body>
    <section class="evenementen-header">
        <h2><b>Hier kun je alle aankomende optredens vinden en <br> optredens die al geweest zijn!</b></h2>
    </section>
    <?php
       $servername = "localhost";
       $username = "root";
       $password = "root";
       $database = "energy";
       $conn = new mysqli($servername, $username, $password, $database);
       if ($conn->connect_error) {
           die("Connection failed: " . $conn->connection_error);
       }
   
       $sql = "SELECT artiesten.naam, artiesten.statement, evenementen.datum, evenementen.max_bezoekers, locaties.plaatsnaam, locaties.gebouw
                FROM evenementen
                LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id
                LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id;";
       if($result = $conn->query($sql)) {
           while($row = $result->fetch_object()) {
               echo "<section class='artist'>" . "<h2>". $row->naam . "<br>";
               echo "<section class='evenementen'>" . "<h1>" . $row->statement . "<p>" . $row->datum . "<p>" . $row->max_bezoekers . "<p>" . $row->plaatsnaam . "<p>" . $row->gebouw . "</section>";
           }
           $result->close();
       }
       $conn->close();
       ?>
    <section class="empty">
        <p></p>   
    </section>
</body>
<footer>
<section id="Footer">
        <article class="adres-tijd">
        <h1 class="adres" style="color: #FF8700; padding-left: 15px;">Adres:</h1><br>
        <p>Betaplein 18</p>
        <p>2321 KS</p>
        <p>Leiden</p>
        </article>
        <article class="adres-tijd">
        <h1 style="color: #FF8700;">Contacgegevens:</h1><br>
        <p style="color: #FF8700;">Telefoonnummer:</p>
        <p>+310882221777</p><br>
        <p style="color: #FF8700;">Email:</p>
        <p>boom.energy@gmail.com</p>
        </article>
        <article class="adres-contact-media">
        <h1 style="color: #FF8700;">Social Media:</h1>
        
        <article class="social-icon"><br>
        <a href="https://www.facebook.com/" target="_blank"><img src="./img/facebook1.0.jpg" alt="Facebook logo"></a>
        <p>/boomenergy</p>
        </article>
        <article class="social-icon"><br>
        <a href="https://www.instagram.com/" target="_blank"><img src="./img/insta1.0.jpg" alt="Instgram logo" ></a>
        <p>@BoomEnergy</p>
        </article>
        <article class="social-icon"><br>
        <a href="https://twitter.com/?lang=nl" target="_blank"><img src="./img/twitter1.0.jpg" alt="Twitter logo"></a>
        <p>@BoomEnergy</p>
        </article>
        </article>
        </section>
</footer>
</html>