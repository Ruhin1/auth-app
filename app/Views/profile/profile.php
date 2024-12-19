<?php
$title = "Profile";
ob_start(); // Output buffering শুরু করুন
?>

<!-- code---------------start  -->

   
        <div class="main">
            <div class="content">
                <img src="<?php echo public_url('assets/images/profile/profile.jpg') ?>" alt=""> 
                <h3>Full Name: MD Tonmoy Islam Ruhin </h3>
                <h3 class="email">Email Name: mdruhinahmed93@gmail.com</h3>
                <h3>User Name: <?php echo htmlspecialchars($data) ?></h3>
            </div>
        </div>
  
 
<!-- code---------------end  -->



<?php
$content = ob_get_clean(); 

StackManager::push('styles', '<link rel="stylesheet" href="' . htmlspecialchars(public_url('assets/css/profile/profile.css')) . '" />');



// Push JavaScript
StackManager::push('scripts', '
    <!-- jQuery (required for Toastr) -->
    <script src="' . htmlspecialchars(public_url('assets/jquery/jquery-3.6.0.min.js')) . '"></script>
');


include __DIR__ . '/../layout/app.php'; 

?> 