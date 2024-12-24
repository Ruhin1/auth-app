<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include_once __DIR__ . '/partials/linktop.php' ?>
    <!-- Render CSS stack -->
    <?php echo StackManager::render('styles'); ?>
</head>
<body> 
    <!-- Header -->
    <header>
        <?php include_once __DIR__ . '/partials/header.php' ?>
    </header>

    <!-- Main Content -->
    <main>
        <?php echo $content ?? ''; ?>
    </main>

    <!-- Footer -->
    <footer>
        <?php include_once __DIR__ . '/partials/footer.php' ?>
    </footer>
    <!-- Render JS stack -->
    <?php include_once __DIR__ . '/partials/linkbottom.php' ?>
    <?php echo StackManager::render('scripts'); ?>
</body>
</html>
