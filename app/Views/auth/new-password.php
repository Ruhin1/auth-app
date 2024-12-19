
<?php

$title = "New Password";
ob_start(); // Output buffering শুরু করুন
?>

<!-- code---------------start  -->

<div class="container">
        <div class="form">
          <!-- Registration form -->
          <form action="" method="POST">
            <p>You are only one step a way from your<br/> new password, recover your password <br/> now.</p>

           

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

            <!-- Form control for confirm password -->
            <div class="form-control">
              <label for="confirm-password">Enter Confirm Password</label>
              <input
                type="password"
                name="confirm-password"
                id="confirm-password"
                placeholder="password123"
                required
              />
              <!-- any error masage showing -->
              <div>
                <strong class="error-masage"></strong>
              </div>
            </div>

            <!--  submit section -->
            <div class="form-control">
                <input
                  type="submit"
                  name="submit"
                  class="submit"
                  id="submit"
                  value="Change Password"
                />
              </div>
          </form>
        </div>
      </div>

<!-- code---------------end  -->



<?php
$content = ob_get_clean(); 

StackManager::push('styles', '<link rel="stylesheet" href="' . htmlspecialchars(public_url('assets/css/auth/new-password.css')) . '" />');



// Push JavaScript
StackManager::push('scripts', '
    <script>
      // Get the checkbox element that toggles the password visibility
      const togglePassword = document.getElementById("eye-checkbox");
     
      // Add an event listener for when the checkbox state changes
      togglePassword.addEventListener("change", function () {
        // Get the password and confirm password input fields
        var password = document.getElementById("password");
        var confirmPassword = document.getElementById("confirm-password");

        // If the checkbox is checked, show the passwords as plain text
        // If unchecked, hide the passwords by setting the type to password
        if (this.checked) {
          password.type = "text";
          confirmPassword.type = "text";
        } else {
          password.type = "password";
          confirmPassword.type = "password";
        }
      });
    </script>
');


include __DIR__ . '/../layout/guest.php'; 

?>

