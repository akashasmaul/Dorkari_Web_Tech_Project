<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="../css/signup_style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
 
  </head>
  <body>
    <div class="container">
      <div class="form-wrapper">
        <div class="banner">
          <h1>Hello, There!</h1>
          <p>Enter your personal details and start journey with us</p>
        </div>
        
        <div class="green-bg">
        
          <button type="button">Sign Up</button>
          
        </div>
       
        <form class="signup-form">
          <h1>Create Account</h1>
          <div class="social-media">
            <a href="https://www.google.com"><i class="fab fa-google"></i></a>
            <a href="https://www.facebook.com/ak4ash"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/_________avro"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/akashasmaul"><i class="fab fa-github"></i></a>
          </div>
          <p>or use your email for registration</p>
          <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" />
          </div>
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>         
          
          <button type="button">Sign Up</button>
        </form>
      </div>
      
    </div>    

    <script src="../js/script_signup.js"></script>
  </body>
</html>
