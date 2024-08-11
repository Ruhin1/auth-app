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
      href="<?php echo htmlspecialchars(Path::public_url('assets/css/auth/email-verification.css')) ?>"
    />
  </head>
  <body>
    <!-- Header section (currently empty) -->
    <header>
      <div class="navber">
        <div class="logo">
          <p>Auth App</p>
        </div>
        <div class="navitems">
          <ul>
            <li>
              <a href="#">Home</a>
              <a href="#">About</a>
              <a href="#">Contact</a>
              <a href="#">Privecy Polcy</a>
            </li>
          </ul>
        </div>
        <div class="profile">
          <img src="<?php echo htmlspecialchars(Path::public_url('assets/images/demo-profile-image.jpg')) ?>" alt="profile">
        </div>
      </div>
    </header>

    <!-- Main section to contain the form -->
    <main>
      <div class="container">
        <div class="email-verification">
          <!-- Form for OTP verification via email -->
          <form action="" method="POST">
      
              <!-- Description of the verification process with the target email displayed -->
              <p class="description">
                  Go to your <span>mdruhinahmed93@gmail.com</span> email. See the 6 digit code generated from auth-app, 
                  enter it now and submit.
              </p>
      
              <!-- Alternate option for mobile verification (commented out) -->
              <!-- 
              <p>Check your <span>+880 18 xxxxxx40</span> message. See the 6 digit code generated from auth-app, 
              enter it now and submit.
              </p> 
              -->
      
              <!-- Input fields for entering the 6-digit OTP -->
              <div class="otp-inputs">
                  <input type="text" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                  <input type="text" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                  <input type="text" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                  <input type="text" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                  <input type="text" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
                  <input type="text" maxlength="1" pattern="[0-9]*" inputmode="numeric" required>
              </div>
      
              <!-- Error message displayed if the OTP is incorrect -->
              <strong class="error">OTP is wrong</strong>
      
              <!-- Submit button for verifying the OTP, initially disabled -->
              <button type="submit" class="submit" id="submit" disabled="true">Verify OTP</button>
          </form>
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
        // Select all the OTP input fields and the submit button
        const inputs = document.querySelectorAll('.otp-inputs input');
        const submitBtn = document.getElementById('submit');
    
        // Loop through each OTP input field
        inputs.forEach((input, index) => {
            // Add event listener to handle input changes
            input.addEventListener('input', () => {
                // Move focus to the next input if the current one is filled
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
    
                // Enable the submit button if all inputs are filled, otherwise disable it
                if (Array.from(inputs).every(input => input.value.length === 1)) {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                }
            });
        });
    
        // Handle backspace key to focus on the previous input
        inputs.forEach((input, index) => {
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value.length === 0 && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
      </script> 
  
  </body>
</html>
 