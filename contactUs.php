<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | MEDICARE HOSPITAL</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header style="background-color: rgb(70, 69, 69)">
    <div class="logo">
      <a href="#"><img src="medicare.png" style="width: 100px; height: 100px; margin-top: 20px" alt="HospitalLogo" /></a>
    </div>

    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>>
        <li><a href="system.php">System</a></li>
      </ul>
    </nav>
  </header>

  <div class="shop-box" style="display: flex; justify-content: center; align-items: center">
    <h1 style="
          color: white;
          font-weight: bolder;
          margin-top: 100px;
          font-family: Open Sans, sans-serif;
        ">
      Contact Us
    </h1>
  </div>

  <div style="
        display: flex;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-color: black;
      ">
    <div style="width: 600px">
      <?php
      session_start();
      if (isset($_SESSION["InsertMessage"])) {
      ?>
        <span style="color: greenyellow;"><?php echo ($_SESSION["InsertMessage"]) ?></span>
      <?php
      }
      ?>
      <form method="post" action="InsertDataProcess.php">
        <div class="form-content">
          <input type="text" style="color: white" id="name" name="name" required />
          <span></span>
          <label>Name</label>
        </div>
        <div class="form-content">
          <input type="email" id="email" name="email" required />
          <span></span>
          <label>Email</label>
        </div>
        <div class="form-content">
          <input type="text" id="mobile" name="mobile" required />
          <span></span>
          <label>Phone Number</label>
        </div>
        <div class="form-content">
          <input type="text" id="address" name="address" required />
          <span></span>
          <label>Address</label>
        </div>
        <button type="submit" value="submit">Send</button>
      </form>
      <h4 style="color: white">
        Please Fill the Form if you want to contact us
      </h4>
    </div>
  </div>
</body>

</html>