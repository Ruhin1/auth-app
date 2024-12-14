<!-- home.php -->
<?php
require __DIR__ . '/../vendor/autoload.php';

include './helper/StackManager.php'; 
$title = "Page one";
ob_start(); // Output buffering শুরু করুন
?>
<h2>page one</h2>



<?php
$content = ob_get_clean(); // Output buffering থেকে কনটেন্ট নিন

// Push CSS
StackManager::push('styles', '');


// Push JavaScript
StackManager::push('scripts', '<script> console.log("dfgfdg"); </script>');

include './layout/app.php'; // layout.php ফাইলটি ইমপোর্ট করুন

?> 