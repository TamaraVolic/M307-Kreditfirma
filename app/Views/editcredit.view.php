<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kredit Bearbeiten</title>
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
    <h1 class="welcome">Kredit Bearbeiten</h1>

    <form method="post">
        <fieldset>
            <legend>Persönliche Angaben</legend>

            <label for="name">Vorname</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo e($result["first_name"]); ?>" required><br>

            <label for="lastname">Nachname</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo e($result['last_name']) ?>" required><br>

                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" value="<?php echo e($result['email']) ?>" required><br>

<<<<<<< HEAD
            <label for="phone_number">Telefonnummer</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="+41 00 000 00 00"
                   value="<?php echo isset($result['phone_number']) ? e($result['phone_number']) : '' ?>">
        </fieldset>

        <fieldset>
            <legend>Kredit Angaben</legend>
            <label for="creditpackage">Kredit Packet</label>
            <select id="creditpackage" name="creditpackage" required>
                <?php
                foreach ($creditPackageData as $index => $creditPackage) {
                    echo "<option value='" . $creditPackage["creditpackage_id"] . "'>" . $creditPackage["name"] . "</option>";
                }
                ?>
            </select>
            <br>
            <input type="checkbox" id="status" name="credit_status" value="1">
            <label for="checkbox">Zurückgezahlt?</label>
        </fieldset>

        <button type="submit" id="submit-btn">Kredit Speichern</button>
    </form>

    <button type="reset" onclick="location.href='<?= ROOT_URL . "/creditlist" ?>'">Abbrechen</button>
=======
                <label for="phone_number">Phone number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="+41 00 000 00 00" value="<?php echo isset($result['phone_number']) ? e($result['phone_number']) : '' ?>">
            </fieldset>

            <fieldset>
                <legend>Credit Information</legend>
                <label for="creditpackage">Credit Package</label>
                <select id="creditpackage" name="creditpackage" required>
                    <?php
                    foreach ($creditPackageData as $index => $creditPackage) {
                        echo "<option value='" . $creditPackage["creditpackage_id"] . "'>" . $creditPackage["name"] . "</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="checkbox" id="status" name="credit_status" value="1">
                <label for="checkbox">Status</label>
            </fieldset>

            <button type="submit" id="submit-btn">Save Loan</button>
        </form>

        <button type="reset" onclick="location.href='<?= ROOT_URL . "/creditlist" ?>'">Cancel</button>
>>>>>>> 3b6374d0a28822270ca0c477e242e4f7ddc159ec

    </div>

    <script src="public/js/app.js"></script>
    <script>
        window.addEventListener('load', () => {
            document.querySelector('form').addEventListener('submit', async e => {
                return await submitForm(e, '<?= ROOT_URL ?>/editcredit?id=<?= $_GET['id'] ?>', '<?= ROOT_URL ?>/validate?q=edit', '<?php echo ROOT_URL ?>/creditlist');
            });
        });
    </script>
</body>
<footer>
    <div class="footer"></div>
</footer>

</html>