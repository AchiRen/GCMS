<?php
include "db_connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/staff.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>Staff</title>
    <style>
        .header-container {
            position: relative;
        }

        .search-results {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            display: <?php echo (isset($results) && count($results) > 0) ? 'block' : 'none'; ?>;
        }

        .search-results h2 {
            font-size: 18px;
        }

        .search-results ul {
            list-style: none;
            padding: 0;
        }

        .search-results li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        .search-results li:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <header>
            <div class="logosec">
                <div class="logo">Dawac Garbage Collectors</div>
                <img src="images/menu.png" class="icn menuicn" id="menuicn" alt="menu-icon">
            </div>
            <div class="searchbar">
                <form action="" method="GET">
                    <input type="text" name="search_query" placeholder="Search">
                    <button type="submit">
                        <img src="images/search.jpg" class="icn srchicn" alt="search-icon">
                    </button>
                </form>
            </div>
            <div class="message">
                <div class="circle"></div>
                <img src="images/bell.jpg" class="icn" alt="">
                <div class="dp">
                    <img src="images/dp.jpg" class="dpicn" alt="dp">
                </div>
            </div>
        </header>
    </div>

    <!-- Display search results -->
    <div class="search-results">
        <?php
        if (isset($_GET['search_query'])) {
            $search_query = $_GET['search_query'];

            $sql = "SELECT * FROM login_records WHERE staff_id LIKE :search_query";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':search_query', '%' . $search_query . '%');
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <?php if (isset($results) && !empty($results)): ?>
            <h2>Search Results - Login Details:</h2>
            <ul>
            <?php foreach ($results as $result): ?>
                <li>Staff ID: <?php echo isset($result['staff_id']) ? $result['staff_id'] : ''; ?></li>
                <li>Staff Username: <?php echo isset($result['staff_username']) ? $result['staff_username'] : ''; ?></li>
                <li>Login Time: <?php echo isset($result['login_time']) ? $result['login_time'] : ''; ?></li>
                <li>Logout Time: <?php echo isset($result['logout_time']) ? $result['logout_time'] : ''; ?></li>
                <!-- Add other fields you want to display -->
                <?php endforeach; ?>
            </ul>
        <?php elseif (isset($_GET['search_query'])): ?>
            <p>No results found for Logged in Staff.</p>
        <?php endif; ?>

    </div>

    <!-- Display search results for the second table -->
    <div class="search-results">
        <?php
        if (isset($_GET['search_query'])) {
            $search_query = $_GET['search_query'];

            $sql = "SELECT * FROM staff WHERE id LIKE :search_query";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':search_query', '%' . $search_query . '%');
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <?php if (isset($results) && !empty($results)): ?>
            <h2>Search Results - Staff Details:</h2>
            <ul>
            <?php foreach ($results as $result): ?>
                <li>ID: <?php echo isset($result['id']) ? $result['id'] : ''; ?></li>
                <li>First name: <?php echo isset($result['first_name']) ? $result['first_name'] : ''; ?></li>
                <li>Last name: <?php echo isset($result['last_name']) ? $result['last_name'] : ''; ?></li>
                <li>Group ID: <?php echo isset($result['group_id']) ? $result['group_id'] : ''; ?></li>
                <li>Phone number: <?php echo isset($result['phone_number']) ? $result['phone_number'] : ''; ?></li>
                <li>Email Address: <?php echo isset($result['email_address']) ? $result['email_address'] : ''; ?></li>
                <li>Physical Address: <?php echo isset($result['physical_address']) ? $result['physical_address'] : ''; ?></li>
                <li>Next of Kin: <?php echo isset($result['next_of_kin']) ? $result['next_of_kin'] : ''; ?></li>
                <li>Kin's Phone No: <?php echo isset($result['kin_phone_number']) ? $result['kin_phone_number'] : ''; ?></li>
                <li>Username: <?php echo isset($result['username']) ? $result['username'] : ''; ?></li>
                <li>Password: <?php echo isset($result['password']) ? $result['password'] : ''; ?></li>
                <!-- Add other fields you want to display -->
            <?php endforeach; ?>
            </ul>
        <?php elseif (isset($_GET['search_query'])): ?>
            <p>No results found for Staff Details.</p>
        <?php endif; ?>

    </div>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="images/dashboard.jpg" class="nav-img" alt="dashboard">
                        <a href="adminpage.php"><h3>Dashboard</h3></a>
                    </div>

                    <div class="option2 nav-option">
                        <img src="images/service.jpg" class="nav-img" alt="qoutes">
                        <a href="quote.php"><h3>Service Quotes</h3></a>
                    </div>

                    <div class="nav-option option3">
                        <img src="images/staff.jpg" class="nav-img" alt="staff">
                        <a href="staff.php"><h3>Staff</h3></a>
                    </div>

                    <div class="nav-option option4">
                        <img src="images/profile.jpg" class="nav-img" alt="user">
                        <a href="users.php"><h3>User Accounts</h3></a>
                    </div>

                    <div class="nav-option option5">
                        <img src="images/dp.jpg" class="nav-img" alt="profile">
                        <a href="profile_page.php"><h3>Profile</h3></a>
                    </div>

                    <div class="nav-option logout">
                        <img src="images/logout.jpg" class="nav-img" alt="logout">
                        <a href="logout.php"><h3>Logout</h3></a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="report-header">
                <h1 class="recent-articles">Staff Details</h1>
            </div>

            <center>
            
                <table>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>last name</th>
                        <th>Group ID</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Physical Address</th>
                        <th>Next of kin</th>
                        <th>Kin's Phone No.</th>
                        <th>Username</th>
                        <th>password</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "gcms2");
                    if ($conn-> connect_error) {
                        die("Connection failed:". $conn-> connect_error);
                    }

                    $sql = "SELECT id, first_name, last_name, group_id, phone_number, email_address, physical_address, 
                            next_of_kin, kin_phone_number, username, password FROM staff";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . 
                            $row["group_id"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["email_address"] . "</td><td>" . 
                            $row["physical_address"] . "</td><td>" . $row["next_of_kin"] . "</td><td>" . $row["kin_phone_number"] . "</td><td>" . 
                            $row["username"] . "</td><td>" . $row["password"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else {
                        echo "0 result";
                    }

                    $conn-> close();
                    ?>
                </table>
            </center>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-articles">Logged in Staff</h1>
                </div>

                <center>
            
                    <table>
                        
                        <?php
                    
                        $conn = mysqli_connect("localhost", "root", "", "gcms2");

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Fetch login records
                        $login_query = "SELECT * FROM login_records";
                        $login_result = mysqli_query($conn, $login_query);

                        if (mysqli_num_rows($login_result) > 0) {
                            echo "<table>";
                            echo "<tr><th>Staff ID</th><th>Username</th><th>Login Time</th><th>Logout Time</th></tr>";
                        while ($login_row = mysqli_fetch_assoc($login_result)) {
                            echo "<tr><td>" . $login_row['staff_id'] . "</td><td>" . $login_row['staff_username'] . "</td><td>" . $login_row['login_time'] . "</td><td>" . date('Y-m-d H:i:s', strtotime($login_row['logout_time'])) . "</td></tr>";

                        }
                            echo "</table>";
                        } else {
                            echo "No login records found.";
                        }

                        // Close the database connection
                        mysqli_close($conn);

                        ?>
                    </table>
                </center>
            </div>


            <div class="report-header">
                <h1 class="recent-articles">Staff Groups(6)</h1>
            </div>

            <center>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Group Name</th>
                        <th>Description</th>
                        <th>No. of members</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "gcms2");
                    if ($conn-> connect_error) {
                        die("Connection failed:". $conn-> connect_error);
                    }

                    $sql = "SELECT id, group_name, description, number_of_members FROM staff_group";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["group_name"] . "</td><td>" . $row["description"] . "</td><td>" . 
                            $row["number_of_members"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else {
                        echo "0 result";
                    }

                    $conn-> close();
                    ?>
                </table>
            </center>

            
        </div>    
    </div> 
    
    <script src="index.js"></script>
</body>
</html>