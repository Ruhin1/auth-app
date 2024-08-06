<?php
require __DIR__ . '/../../vendor/autoload.php';

use Config\Path;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo htmlspecialchars(Path::public_url('assets/css/auth/register.css')) ?>">
</head>
<body>
 <header></header>
 <main>
 <div class="container">
  <div class="form">
    <form action="">
      <p>Register</p>
      <div class="form-control">
        <label for="first-name">Enter Frist Name</label>
        <input type="text" name="first-name" id="first-name" placeholder="MD Tonmoy Islam" required>
      </div>
      <div class="form-control">
        <label for="last-name">Enter Last Name</label>
        <input type="text" name="last-name" id="last-name" placeholder="Ruhin" required>
      </div>
      <div class="form-control">
        <label for="email">Enter Email</label>
        <input type="email" name="email" id="email" placeholder="mdruhinahmed93@gmail.com" required>
      </div>
      <div class="form-control">
        <label for="password">Enter Password</label>
        <input type="password" name="password" id="password" placeholder="password123" required>
      </div>
      <div class="form-control">
        <label for="confram-password">Enter Confrim Password</label>
        <input type="password" name="confram-password" id="confram-password" placeholder="password123" required>
      </div>
      <div class="agery-submit">
        <div>
          <input type="checkbox" name="agery" id="agery" class="agery" required>
          <label for="agery">I agree to the <span>terms</span></label>
        </div>
        <div>
          <input type="submit" value="Register" id="register" class="register">
        </div>
      </div>
    </form>
    <div class="social-login">
      <button>sign up using facebook</button>
      <button>sign up using google</button>
    </div>
    <div class="alrady-reigster">
      <p>I have alrady reigsterd <a href="#">LOGIN NAW</a></p>
    </div>
  </div>
 </div>
 </main>
 <footer></footer>
</body>
</html>