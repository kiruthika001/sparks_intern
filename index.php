<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title> Banking Management System </title>
</head>
 
<body>
  <!-- nav bar -->
  <?php
  include 'navbar.php';
?>
  <!-- main content -->
  <main>
    <div>
      <div class="text" style="color: aliceblue;">
        <div>
          <h1>ONLINE BANKING</h1>
        </div>
        <div>
          <p>To provide convenient, secure, and accessible financial services to customers <br>
            through innovative technology and exceptional customer support, while <br>
            maintaining the highest standards of ethics and transparency in all <br>
            our business practices.</p>
        </div>
        <!-- button -->
        <div class="btn">
          <ol>
            <li>
              <div class="join">
                <a href="/transfermoney.php"> <button class="button-27" role="button"> Customers list </button></a>
              </div>
            </li>
            <li>
              <div class="text-box">
                <a href="/transfermoney.php"> <button class="button-27" role="button">Transfer Money</button> </a>
              </div>
            </li>
        </div>
        </ol>
  </main>
  <!-- js file -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
</body>

</html>