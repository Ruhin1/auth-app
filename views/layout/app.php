<?php include_once __DIR__ . '/../helper/StackManager.php'; ?>

<!-- layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Default Title'; ?></title>
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
    <?php echo StackManager::render('scripts'); ?>
</body>
</html>
