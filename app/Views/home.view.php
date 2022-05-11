<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="app/index.css">
    <script src="https://kit.fontawesome.com/3c0aa5375d.js" crossorigin="anonymous"></script>
</head>

<header>
    <div class="header">
        <h1 style=" z-index: 1;">Kredithay</h1>
        <i style="float: right;" class="fa-solid fa-user fa-lg"></i>
        <div class="tablecenter">
            <li><a href="home">Home</a></li>
            <li><a href="creditlist">List</a></li>
            <li><a href="createcredit">Create</a></li>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="welcome">
            <h1>♡lich Willkommen</h1>
            <p>Werden Sie heute noch ein Member von Kredihay
                <br>und verschaffen Sie sich heute noch Ihren Kredit.
                <br>Diese Webseite wurde von Robert Fodor und Tamara Volic erstellt für den ÜK 307.
                <br>Wir freuen uns auf unsere Rückmeldung und bis dahin..
                <br>Wünschen wir Ihnen viel spass Ihr Kredit bei Kredithay aufzunehmen.
            </p>
        </div>
        <div class="bankbild">
            <img src="bilder/bank.jpg" alt="Bank">
        </div>
    </div>
    <script src="public/js/app.js"></script>
</body>

<footer>
    <div class="footer"></div>
</footer>

</html>