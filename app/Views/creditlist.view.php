<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Credit List</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
<div class="container">

    <h1 class="welcome">Credit List</h1>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>E-Mail</th>
            <th>Phone number</th>
            <th>Installments</th>
            <th>Credit package</th>
            <th>Pay back until</th>
            <th>Due</th>
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
                    <button onclick="window.location.href='<?= ROOT_URL ?>/editcredit?id=<?= $credit['credit_id'] ?>'">
                        edit
                    </button>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button onclick="window.location.href='<?= ROOT_URL ?>/home'">&#127968; Go back home</button>
    <button onclick="window.location.href='<?= ROOT_URL ?>/createcredit'">&#10133; Create new credit</button>
</div>

<script src="public/js/app.js"></script>
</body>
</html>