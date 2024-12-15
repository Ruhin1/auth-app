
         <!-- Navigation bar container -->
         <div class="navber">
            <!-- Logo section with a link to the homepage -->
            <div class="logo">
               <a href="#">Auth App</a>
            </div>
            <!-- Navigation items section with links to different pages -->
            <div class="navitems">
               <ul>
                  <li>
                     <a href="#">Home</a>
                     <a href="#">About</a>
                     <a href="#">Contact</a>
                     <a href="#">Privacy Policy</a> <!-- Corrected spelling -->
                  </li>
               </ul>
            </div>
            <!-- Profile section with an image that acts as a toggle button -->
            <div class="profile">
               <!-- Profile image linked from the assets directory -->
               <img id="profile" src="<?php echo htmlspecialchars(public_url('assets/images/demo-profile-image.jpg')) ?>" alt="profile">
            </div>
         </div>
         <!-- Additional navigation links, toggled by the profile image -->
         <div class="navber-other-links" id="navber-other-links">
            <ul>
               <li><a href="#">Profile</a></li>
               <li><a href="#">Link 1</a></li>
               <li><a href="#">Link 2</a></li>
               <!-- Corrected duplicate link label -->
               <li><a href="#">Logout</a></li>
            </ul>
         </div>
   