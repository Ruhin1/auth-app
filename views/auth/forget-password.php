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
      href="<?php echo htmlspecialchars(Path::public_url('assets/css/auth/forget-password.css')) ?>"
    />
  </head>
  <body>
    <!-- Header section (currently empty) -->
    <header></header>

    <!-- Main section to contain the form -->
    <main>
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
    </main>

    <!-- Footer section (currently empty) -->
    <footer></footer>
  </body>
</html>
