<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Style/text.css" rel="stylesheet">
    <link href="./Style/index2.css" rel="stylesheet">
    <!-- <link href="./Style/connexion.css" rel="stylesheet"> -->
    <link href="./Style/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?= $pageTitle ?></title>
</head>
</head>
<body>
<header>
    <?php require 'header.php'?>
</header>
<?= $pageContent ?>
<footer>
    <?php include('footer.php') ?>
</footer>
</body>
</html>