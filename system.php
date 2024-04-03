<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>System Login | MEDICARE HOSPITAL</title>
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
            System Login
        </h1>
    </div>

    <div style="
        display: flex;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-color: black;
      ">
        <div style="width: 600px;">

            <form action="loginSystemProces.php" method="post">
                <div class="adminEmail">
                    <input type="text" style="background-color: transparent; border: 1px solid gray; width: 100%; font-size: xx-large; color: white; border-radius: 10px;" placeholder="Please Enter  Email Address">
                </div>
                <br>
                <div class="Password">
                    <input type="password" style="background-color: transparent; border: 1px solid gray; width: 100%; font-size: xx-large; color: white; border-radius: 10px;" placeholder="Please Enter Your Password">
                </div>

                <div style="margin-top: 20px; display: flex; justify-content: center">
                    <button class="SystemLoginBtn">Login</button>
                </div>
            </form>

        </div>
</body>

</html>