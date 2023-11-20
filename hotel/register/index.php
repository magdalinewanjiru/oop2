<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php
    // Initialize the session
    session_start();
     
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    ?>
     
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to shee hotel✨✨.</h1>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        </p>
    </body>
    </html>





  <!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
   
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
     MAIN MENU
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Hotel</a></li>
      <li><a class="dropdown-item" href="#">Room</a></li>
      <li><a class="dropdown-item" href="#">Conference hall</a></li>
    </ul>
  </div>
   
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>

<!-- Button to open the offcanvas sidebar -->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
  MENU
</button>

<div class="container">
  <div class="row">
    
    <div class="col-xl-6">
      <img src="image/dish.jpeg" alt="Image 2" class="img-fluid">
    </div>
    <div class="col-md-6">
      <img src="image/room4.jpeg" alt="Image 3" class="img-fluid">
    </div>
    <div class="col-md-6">
      <img src="image/food2.jpg" alt="Image 4" class="img-fluid">
    </div>

    <div class="col-xl-6">
      <div class="container mt-3">
          <h2>SHEE HOTEL ✨✨💫💫💫</h2>
        <div class="card">
          <div class="card-header">WELCOME TO SHEE HOTEL 🍛🍕
               YOUR COMFORT, OUR CONCERN 💯💯</div>
          <div class="card-body">ORDER YOUR BREAKFAST,LUNCH, DINNER OR SNACK, RESERVE A ROOM AND A TABLE AT THE COMFORT OF YOUR HOME✨✨
          </div> 
          <div class="card-footer">FOODS ARE ORDERED THEN PREPARED</div>
        </div>
      </div>
      </div>

  </div>
</div>



<!-- Bootstrap JS and jQuery (optional for Bootstrap features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

