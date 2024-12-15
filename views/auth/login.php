<?php

require __DIR__ . '/../../vendor/autoload.php';

include '../helper/StackManager.php'; 
$title = "Login";
ob_start(); // Output buffering শুরু করুন
?>

<!-- code---------------start  -->

<div class="container">
        <div class="form">
          <!-- Login form --> 
          <form action="" method="POST">
            <p>Login</p>

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

            <!-- Form control for eye checkbox and password element -->
            <div class="form-control">
              <label for="password">Enter Password</label>

              <!-- Container for the password input and eye icon -->
              <div class="eye-password">
                <!-- Password input field -->
                <input
                  type="password"
                  name="password"
                  class="password"
                  id="password"
                  placeholder="password123"
                  required
                />

                <!-- Eye icon checkbox for toggling password visibility -->
                <div class="eye">
                  <input
                    type="checkbox"
                    name="eye"
                    class="eye-checkbox"
                    id="eye-checkbox"
                  />
                </div>
              </div>
              <div>
                <strong class="error-masage"></strong>
              </div>
            </div>

            <!-- Style submit section -->
            <div class="form-control">
                <input
                  type="submit"
                  name="login"
                  value="LOGIN"
                  id="login"
                  class="submit"
                />
            </div>
          </form>

          <!-- Social login buttons -->
          <div class="social-login">
            <button>Sign in using Facebook</button>
            <button>Sign in using Google</button>
          </div>

          <div class="forget-password">
            <a href="#">I forgot my password</a>
          </div>

          <!-- Already registered section with a link to login -->
          <div class="already-register">
            <p>I have do not registered <a href="#">SINGUP NOW</a></p>
          </div>
        </div>
      </div>

<!-- code---------------end  -->



<?php
$content = ob_get_clean(); 

StackManager::push('styles', '<link rel="stylesheet" href="' . htmlspecialchars(public_url('assets/css/auth/login.css')) . '" />');



//Push JavaScript

StackManager::push('scripts', '
    <!-- jQuery (required for Toastr) -->
    

    <script>
      // Toggle password visibility based on checkbox state
      const togglePassword = document.getElementById("eye-checkbox");

      togglePassword.addEventListener("change", function () {
        var password = document.getElementById("password");
        password.type = this.checked ? "text" : "password";
      });
    </script>
');


include '../layout/guest.php'; 

?> 

