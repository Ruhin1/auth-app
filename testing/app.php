<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ?  $title : 'Defolt-Title' ?></title>
</head>
<body>
    <header>
        <p>Heaer</p>
    </header>
    <main>
        <?php echo isset($content) ?  $content : '' ?>
    </main>
    <footer>
        <p>footer</p>
    </footer>
</body>
</html>