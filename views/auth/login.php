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
    <!-- Link to the external CSS file for styling the register page -->
    <link
      rel="stylesheet"
      href="<?php echo htmlspecialchars(Path::public_url('assets/css/auth/login.css')) ?>"
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
            <p>Login</p>

            <!-- Form control for first name -->
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
                  name="login"
                  value="LOGIN"
                  id="login"
                  class="login"
                />
              </div>
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
    </main>

    <!-- Footer section (currently empty) -->
    <footer></footer>

    <script>
      const togglePassword = document.getElementById("eye-checkbox");

      togglePassword.addEventListener("change", function () {
        var password = document.getElementById("password");
        if (this.checked) {
          password.type = "text";
        } else {
          password.type = "password";
        }
      });
    </script>
  </body>
</html>