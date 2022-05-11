<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kredit Erstellen</title>
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
            <li><a href="creditlist">Kredit Übersicht</a></li>
            <li><a href="createcredit">Kredit Erstellen</a></li>
            </ul>
        </div>
    </div>
</header>

<body>
<div class="container">
    <h1 class="welcome">Kredit Erstellen</h1>
    <form method="post">
        <fieldset>
            <legend>Persönliche Angaben</legend>
            <label for="first_name">Vorname</label>
            <input type="text" id="first_name" name="first_name" placeholder="Firstname" required><br>
            <label for="last_name">Nachname</label>
            <input type="text" id="last_name" name="last_name" placeholder="Lastname" required><br>
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" placeholder="E-Mail" required><br>
            <label for="phone_number">Telefonnummer</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Phone number">
        </fieldset>
        <fieldset>
            <legend>Kredit Angaben</legend>
            <label for="installments">Anzahl der Raten</label>
            <input type="number" id="installments" name="installments" placeholder="Amount installments" min="1"
                   max="10" value="1" required onchange="setRepaymentDate()"><br>
            <label for="creditpackage">Kredit Paket</label>
            <select id="creditpackage" name="creditpackage" required>
                <?php
                foreach ($creditPackageData as $index => $creditPackage) {
                    echo "<option value='" . $creditPackage["creditpackage_id"] . "'>" . $creditPackage["name"] . "</option>";
                }
                ?>
            </select>
            <br>
            <label for="tbxPayday">Rückzahl Datum</label>
            <input type="date" id="tbxPayday" name="Repayment date" placeholder="Repayment date" disabled>
        </fieldset>
        <button type="submit" id="submit-btn">Kredit Erstellen</button>
    </form>
    <button type="reset" onclick="location.href='<?= ROOT_URL . "/creditlist" ?>'">Abberchen</button>
</div>
<script src="public/js/app.js"></script>
<script>
    window.addEventListener('load', () => {
        document.querySelector('form').addEventListener('submit', async e => {
            return await submitForm(e, '<?= ROOT_URL ?>/createcredit', '<?= ROOT_URL ?>/validate?q=create', '<?php echo ROOT_URL ?>/creditlist');
        });
        setRepaymentDate()
        document.querySelector('#installments').addEventListener('onchange', () => {
            setRepaymentDate()
            document.querySelector('#installments').addEventListener('onchange', () => {
                setRepaymentDate()
            })
        });
    </script>
</body>
<footer>
    <div class="footer"></div>
</footer>
</html>