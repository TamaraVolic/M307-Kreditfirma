<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Create loan</title>
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
                    <li><a href="creditlist">List</a></li>
                    <li><a href="createcredit">Create</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>
<div class="container">
    <h1 class="welcome">Create a new loan</h1>
    <form method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <label for="first_name">Firstname</label>
            <input type="text" id="first_name" name="first_name" placeholder="Firstname" required><br>

            <label for="last_name">Lastname</label>
            <input type="text" id="last_name" name="last_name" placeholder="Lastname" required><br>

            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email" placeholder="E-Mail" required><br>

            <label for="phone_number">Phone number</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Phone number">
        </fieldset>

        <fieldset>
            <legend>Credit Information</legend>
            <label for="installments">Amount installments</label>
            <input type="number" id="installments" name="installments" placeholder="Amount installments" min="1"
                   max="10" value="1" required onchange="setRepaymentDate()"><br>
            <label for="creditpackage">Credit Package</label>
            <select id="creditpackage" name="creditpackage" required>
                <?php
                foreach ($creditPackageData as $index => $creditPackage) {
                    echo "<option value='" . $creditPackage["creditpackage_id"] . "'>" . $creditPackage["name"] . "</option>";
                }
                ?>
            </select>
            <br>

            <label for="tbxPayday">Repayment date</label>
            <input type="date" id="tbxPayday" name="Repayment date" placeholder="Repayment date" disabled>
        </fieldset>

        <button type="submit" id="submit-btn">Create Credit</button>
    </form>

    <button type="reset" onclick="location.href='<?= ROOT_URL . "/creditlist" ?>'">Cancel</button>
<<<<<<< HEAD
=======

>>>>>>> c625101ddcda95fd0d14a08ad87c009373f55dbe
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
        })
    });
</script>
</body>
<footer>
    <div class="footer">

    </div>
</footer>
</html>