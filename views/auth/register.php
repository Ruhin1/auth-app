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
            </div>

            <!-- Form control for password -->
            <div class="form-control">
              <label for="password">Enter Password</label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="password123"
                onclick="Toggle()"
                required
              />
              <div>
                <input type="checkbox" name="eye" id="eye" />
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

    <script>
      // Change the type of input to password or text
      function Toggle() {
        let temp = document.getElementById("password");

        if (temp.type === "password") {
          temp.type = "text";
        } else {
          temp.type = "password";
        }
      }
    </script>
  </body>
</html>
