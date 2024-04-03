<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>System Dashboard | MEDICARE HOSPITAL</title>
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
                <li><a href="contactUs.php">Contact Us</a></li>
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
            System Dashboard
        </h1>
    </div>

    <div style="
        display: flex;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-color: black;
      ">
        <div style="width: 900px;">
            <table style="color: white; border: 1px solid white; background-color:gray; width: 100%;">
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Name</th>
                    <th>Name</th>
                    <th>Action</th>

                </tr>

                <?php
                require "Connections/connection.php";
                $patient_rs = Database::search("SELECT * FROM `patient` ");
                $patient_num = $patient_rs->num_rows;

                for ($i = 0; $i < $patient_num; $i++) {
                    $patient_data = $patient_rs->fetch_assoc();
                ?>
                    <tr>
                        <th><?php echo ($patient_data["Email"]) ?></th>
                        <th><?php echo ($patient_data["Name"]) ?></th>
                        <th><?php echo ($patient_data["Mobile"]) ?></th>
                        <th><?php echo ($patient_data["Address"]) ?></th>
                        <?php
                        if ($patient_data["Status"] == "PENDING") {
                        ?>
                            <th> <button style="background-color: yellow;" onclick="window.location = 'UpdateStatusProcess.php?email=<?php echo($patient_data['Email'])?>'">Pending Call</button></th>

                        <?php
                        } else if ($patient_data["Status"] == "DONE") {
                        ?>
                            <th><button style="background-color: greenyellow;">Called</button></th>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }

                ?>

            </table>
        </div>
    </div>
</body>

</html>