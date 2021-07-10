<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | SBG Bank</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d30ff5ad29.js" crossorigin="anonymous"></script> 
</head>
  <body>
      <header>
        <div class="logo">
            <a href="index.php"><img src="img/banklogo.png" alt="Bank">
                <span class="heading">SBG Bank</span>
            </a>
        </div>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutme.php">About</a></li>
            <li><a href="contact.php" style="color: orangered;">Contact</a></li>
        </ul>
    </header>
    <section class="contact-me" id="contact-id">
        <div class="contact-heading">
            <h1 style="color: black;">Contact me</h1>
            <h3 style="color: orangered;">get in touch</h3>
        </div>
        <div class="left-column">
            <h2 class="left-heading">Get in Touch</h2>
            <p>Need to get in touch? I'd love to hear from you! Please fill out my form and I'll contact you as soon as possible.</p>
            <div class="user-info">
                <i style="color: orangered;"class="fas fa-user fa-lg"></i><span class="lbl">Name</span><span class="value">Shailesh Godghase</span>
            </div>
            <div class="user-info">
                <i style="color: orangered" class="fas fa-envelope fa-lg"></i>
                <span class="lbl">Email</span>
                <p class="value">shaileshgodghase19@gmail.com</p>
            </div>
            <div class="user-info">
                <i style="color: orangered;" class="fas fa-map-marker-alt fa-lg"></i><span class="lbl">Address</span><span class="value">Aurangabad, Maharashtra</span>
            </div>
        </div>
        <div class="right-column">
            <h2 class="left-heading">Message Me</h2>
            <form onsubmit="return myFunction();">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" id="New Mail Woooo!!">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <div class="m-area">
                    <textarea name="Message" id="message"  placeholder="Message.." required></textarea>
                    <!-- cols="25" rows="5"-->
                </div>
                <button type="submit">Send message</button>
                <h3 id="demo"></h3>
            </form>
        </div>
    </section>
     <footer>
        <a href="index.php"><h1 class="text-color-red">SBG &nbsp;<span style="color: white;">Bank</span></h1></a>
        <div class="social-media">
            <a href="https://github.com/ShaileshGodghase" target="_blank"><i style="color:white" class="fab fa-github fa-2x"></i></a>
            <a href="https://www.instagram.com/shailesh_3105/" target="_blank"><i style="color:white" class="fab fa-instagram fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/shailesh-godghase-b4392220a/" target="_blank"><i style="color:white" class="fab fa-linkedin-in fa-2x"></i></a>
        </div>
        <span style="color:white">Created By <a class="s" href="https://shaileshgodghase.github.io/Portfolio/" target="_blank">Shailesh Godghase</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
    <script>
      function myFunction() {
     document.getElementById("demo").innerHTML = "Thanks For Getting In Touch..!";
     return false;
    }
    </script>
  </body>
</html>
