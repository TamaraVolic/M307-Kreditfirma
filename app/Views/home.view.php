<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Startseite</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="app/index.css">
    <script src="https://kit.fontawesome.com/3c0aa5375d.js" crossorigin="anonymous"></script>    
</head>

<header>
    <div class="header">
        <h1>Kredithay</h1>
        <i class="fa-solid fa-user fa-lg"></i>
        <nav>
            <div class="tablecenter">
                <ul>
                    <li><a href="home">Startseite</a></li>
                    <li><a href="creditlist">Kredit Übersicht</a></li>
                    <li><a href="createcredit">Kredit Erstellen</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>
    <div class="container">
        <h1>♡lich Willkommen</h1>
        <p>Werden Sie heute noch ein Member von Kredihay und verschaffen Sie sich heute noch Ihren Kredit.</p>
        <img src="bilder/bank.jpg" alt="Bank">
    </div>
    
    <script src="public/js/app.js"></script>
</body>

<footer>
    <div class="footer"></div>
</html>