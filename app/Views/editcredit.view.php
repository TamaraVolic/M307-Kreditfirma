<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Edit l</title>
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
        <h1 class="welcome">Edit Credit</h1>

        <form method="post">
            <fieldset>
                <legend>Personal Information</legend>

                <label for="name">Firstname</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo e($result["first_name"]); ?>" required><br>

                <label for="lastname">Lastname</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo e($result['last_name']) ?>" required><br>

                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" value="<?php echo e($result['email']) ?>" required><br>

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