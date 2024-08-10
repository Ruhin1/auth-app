<?php
// Autoload all the necessary classes and dependencies
require __DIR__ . '/../../vendor/autoload.php';

// Use the Path class from the Config namespace
use Config\path;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- Toastr CSS -->
     <link rel="stylesheet" href="<?php echo htmlspecialchars(Path::public_url('assets/toastr/toastr.min.css')) ?>">
    <!-- Link to the external CSS file for styling the register page -->
    <link
      rel="stylesheet"
      href="<?php echo htmlspecialchars(Path::public_url('assets/css/auth/register.css')) ?>"
    />
  </head>
  <body>
    <!-- Header section (currently empty) -->
    <header></header>

    <!-- Main section to contain the form -->
    <main>
      <div class="container">
        <div class="form">
          <!-- Registration form -->
          <form action="" method="POST">
            <p>Register</p>

            <!-- Form control for first name -->
            <div class="form-control">
              <label for="first-name">Enter First Name</label>
              <input
                type="text"
                name="first-name"
                id="first-name"
                placeholder="MD Tonmoy Islam"
                required
              />
              <!-- any error masage showing -->
              <div>
                <strong class="error-masage"></strong>
              </div>
            </div>

            <!-- Form control for last name -->
            <div class="form-control">
              <label for="last-name">Enter Last Name</label>
              <input
                type="text"
                name="last-name"
                id="last-name"
                placeholder="Ruhin"
                required
              />
              <!-- any error masage showing -->
              <div>
                <strong class="error-masage"></strong>
              </div>
            </div>

            <!-- Form control for email -->
            <div class="form-control">
              <label for="email">Enter Email</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="mdruhinahmed93@gmail.com"
                required
              />
              <div>
                <strong class="error-masage"></strong>
              </div>
            </div>

            <!-- Form control for mobile number -->
            <div class="form-control">
              <label for="mobile-number">Enter Mobile Number</label>
              <input
                type="number"
                name="mobile-number"
                id="mobile-number"
                placeholder="018xx-xxxxxx"
                required
              />
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

            <!-- Agreement and submit section -->
            <div class="agery-submit">
              <div>
                <!-- Agreement checkbox -->
                <input
                  type="checkbox"
                  name="agery"
                  id="agery"
                  class="agery"
                  required
                />
                <label for="agery">I agree to the <span>terms</span></label>
              </div>
              <div>
                <!-- Submit button -->
                <input
                  type="submit"
                  name="register"
                  value="Register"
                  id="register"
                  class="register"
                />
              </div>
            </div>
          </form>

          <!-- Social login buttons -->
          <div class="social-login">
            <button>Sign up using Facebook</button>
            <button>Sign up using Google</button>
          </div>

          <!-- Already registered section with a link to login -->
          <div class="already-register">
            <p>I have already registered <a href="#">LOGIN NOW</a></p>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer section (currently empty) -->
    <footer></footer>

    <!-- jQuery (required for Toastr) -->
    <script src="<?php echo htmlspecialchars(Path::public_url('assets/jquery/jquery-3.6.0.min.js')) ?>"></script>

    <!-- js file links -->
     <script src="<?php echo htmlspecialchars(Path::public_url('assets/toastr/toastr.min.js')) ?>"></script>
     
     <script>
      // Get the checkbox element that toggles the password visibility
      const togglePassword = document.getElementById("eye-checkbox");

      // Add an event listener for when the checkbox state changes
      togglePassword.addEventListener("change", function () {
        // Get the password and confirm password input fields
        var password = document.getElementById("password");
        var confirmPassword = document.getElementById("confirm-password");

        // If the checkbox is checked, show the passwords as plain text
        // If unchecked, hide the passwords by setting the type to 'password'
        if (this.checked) {
          password.type = "text";
          confirmPassword.type = "text";
        } else {
          password.type = "password";
          confirmPassword.type = "password";
        }
      });
    </script> 
  </body>
</html>
