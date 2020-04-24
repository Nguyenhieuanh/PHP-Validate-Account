<?php
$pattern = '/^[_a-z0-9]{6,}$/';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $acc = $_REQUEST['account'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Validate account</title>
</head>
<body>
<form action="#" method="get">
    <label>
        Account:
        <input type="text" name="account">
    </label>
    <button type="submit" name="check">Check</button>
    <br>
    <?php if (isset($_REQUEST['check'])) {
        if (!preg_match($pattern, $acc)) {
            echo "Wrong format";
        } else echo "Ok!";
    }
    ?>
</form>
</body>
</html>
