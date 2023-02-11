<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <!-- adding css files  -->
  <link rel="stylesheet" href="/css/contact.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- adding nav bar  -->
  <?php
  include 'navbar.php';
?>
  <!-- starting html part  -->
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">
          <div class="information">
            <img src="img/location.png" class="icon" alt="" />
            <p>92 Cherry Drive Uniondale, NY 11553</p>
          </div>
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>lorem@ipsum.com</p>
          </div>
          <div class="information">
            <img src="img/phone.png" class="icon" alt="" />
            <p>123-456-789</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="index.html">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            
            <label for="name" >Username</label>
            <input type="text" name="name" class="input" required/>
          </div>
          <div class="input-container">
            <label for="email">Email</label>
            <input type="email" name="email" class="input" required/>
            
          </div>
          <div class="input-container">
            <label for="phone" >Phone</label>
            <input type="number" name="phone" class="input" required/>
            

          </div>
          <div class="input-container textarea">
            <label for="message" >Message</label>
            <textarea name="message" class="input" required></textarea>
            
          </div>
          <a href="/index.php" ><input type="button" value="Send" onclick="sndalert()" class="btn"  /></form></a>

      </div>
    </div>
  </div>
</body>
<script>
  function sndalert(){
    alert("Success! your query sent successfully")
  }
</script>
</html>