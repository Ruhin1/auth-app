<?php include_once __DIR__ . '/../helper/StackManager.php'; ?>
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
     
    </header>

    <!-- Main Content -->
    <main>
        <?php echo $content ?? ''; ?>
    </main>

    <!-- Footer -->
    <footer>
        
    </footer>
    <!-- Render JS stack -->
    <?php include_once __DIR__ . '/partials/linkbottom.php' ?>
    <?php echo StackManager::render('scripts'); ?>
</body>
</html> 
