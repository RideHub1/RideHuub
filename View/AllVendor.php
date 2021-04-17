<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>All Vendors</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>

    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>All Vendor Profile</h2>
    </div>

    <nav>

        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <p><img src="Pictures/vendor.jpg" alt="Home"></p>

    <!-- main -->
    <section class="pad-70 right">
        <div class="container">
            <?php

            require('../control/ValidationLogin.php');

            $connection = new db();
            $conobj = $connection->OpenCon();
            $connection->Show($conobj, "Vendor");

            $userQuery = $connection->Show($conobj, "Vendor");

            if ($userQuery->num_rows > 0) {

                echo "<table><tr><th>Name</th><th>Email</th><th>Password</th><th>Type</th><th>Phone</th><th>Address</th><th>TradeLicense</th><th>Action</th></tr>";
                // output data of each row
                while ($row = $userQuery->fetch_assoc()) {
                    echo "<tr><td>";
                    echo (htmlentities($row['name']));
                    echo ("</td><td>");
                    echo (htmlentities($row['email']));
                    echo ("</td><td>");
                    echo (htmlentities($row['password']));
                    echo ("</td><td>");
                    echo (htmlentities($row['type']));
                    echo ("</td><td>");
                    echo (htmlentities($row['phone']));
                    echo ("</td><td>");
                    echo (htmlentities($row['address']));
                    echo ("</td><td>");
                    echo (htmlentities($row['tradelicense']));
                    echo ("</td><td>");
                    echo ('<a href="AdminHome.php">' . 'Edit</a> / ');
                    echo ('<a href="AdminHome.php">' . 'Delete</a> ');
                    echo ("</td></tr>\n");
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $connection->CloseCon($conobj);
            ?>

        </div>
    </section>
    <!-- main -->
    <!-- footer -->
    <footer>
        <div class="container footer-wrap">
            <div class="footer-left">
                <ul class="footer-menu">
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy</a></li>
                </ul>

            </div>
            <div class="footer-right">
                <ul class="footer-menu">
                    <li><a href="">Follow</a></li>
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>


    </footer>
    <!-- footer -->
    <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
</body>

</html>