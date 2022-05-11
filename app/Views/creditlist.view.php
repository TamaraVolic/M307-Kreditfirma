<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kredit übersicht</title>
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
                    <li><a href="home">Home</a></li>
                    <li><a href="creditlist">Kredit Übersicht</a></li>
                    <li><a href="createcredit">Kredit Erstellen</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>
    <div class="container">
    <h1 class="welcome">Kredit Übersicht</h1>
    <table class="ths">
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>E-Mail</th>
            <th>Telefonnummer</th>
            <th>Anzahl der Raten</th>
            <th>Kredit Paket</th>
            <th>Rückzahldatum</th>
            <th>Fällig</th>
            <th></th>
        </tr>
        <?php
        foreach ($result as $credit) {
            ?>
            <tr>
                <td><?= e($credit['first_name']) ?></td>
                <td><?= e($credit['last_name']) ?></td>
                <td><?= e($credit['email']) ?></td>
                <td><?= isset($credit['phone_number']) ? e($credit['phone_number']) : '' ?></td>
                <td><?= e($credit['installments']) ?></td>
                <td><?= e($credit['credit_package']) ?></td>
                <td><?= e($credit['payback_date']) ?></td>
                <td><?= $credit['due'] == 0 ? '&#127774;' : '&#9889;' ?></td>
                <td>
                    <button onclick="window.location.href='<?= ROOT_URL ?>/editcredit?id=<?= $credit['credit_id'] ?>'">&#x270F;&#xFE0F;
                        edit
                    </button>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button onclick="window.location.href='<?= ROOT_URL ?>/home'">&#127968; Zurück zur Startseite</button>
    <button onclick="window.location.href='<?= ROOT_URL ?>/createcredit'">&#10133; Neuen Kredit Erstellen</button>
</div>

    <script src="public/js/app.js"></script>
</body>
<footer>
    <div class="footer"></div>
</footer>

</html>