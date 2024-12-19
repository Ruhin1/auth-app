<?php
$title = "forgot password";
ob_start(); // Output buffering শুরু করুন
?>

<!-- code---------------start  -->

<div class="container">
        <div class="form">
          <!-- Forget password form -->
          <form action="" method="POST">
            <p>
              You forgot your password? Here you can <br />
              easily retrieve a new password.
            </p>
            <!-- Form control for Email Number Username -->
            <div class="form-control">
              <label for="first-name">Enter Email or user or number</label>
              <input
                type="text"
                name="e-n-u-field"
                id="e-n-u-field"
                placeholder="mdruhinahmed93@gmail.com"
                required
              />
              <!-- any error masage showing -->
              <div>
                <strong class="error-masage"></strong>
              </div>
            </div>
            <!-- Submit button -->
            <div class="form-control">
              <input
                type="submit"
                name="submit"
                class="submit"
                id="submit"
                value="Request New Password"
              />
            </div>
          </form>
          <div class="other-links">
            <a href="#">Login</a>
            <a href="#">Register a new</a>
          </div>
        </div>
      </div>

<!-- code---------------end  -->



<?php
$content = ob_get_clean(); 

StackManager::push('styles', '<link rel="stylesheet" href="' . htmlspecialchars(public_url('assets/css/auth/forget-password.css')) . '" />');



// Push JavaScript
// StackManager::push('scripts', '
//     <!-- jQuery (required for Toastr) -->
//     <script src="' . htmlspecialchars(public_url('assets/jquery/jquery-3.6.0.min.js')) . '"></script>
// '); 

include __DIR__ . '/../layout/guest.php'; 

?> 