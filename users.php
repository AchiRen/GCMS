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
    <link rel="stylesheet" href="CSS/users.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>Users</title>
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

            $sql = "SELECT * FROM user WHERE first_name LIKE :search_query";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':search_query', '%' . $search_query . '%');
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <?php if (isset($results) && !empty($results)): ?>
            <h2>Search Results:</h2>
            <ul>
            <?php foreach ($results as $result): ?>
                <li>ID: <?php echo isset($result['id']) ? $result['id'] : ''; ?></li>
                <li>First name: <?php echo isset($result['first_name']) ? $result['first_name'] : ''; ?></li>
                <li>Last name: <?php echo isset($result['last_name']) ? $result['last_name'] : ''; ?></li>
                <li>Phone number: <?php echo isset($result['phone_number']) ? $result['phone_number'] : ''; ?></li>
                <li>Email Address: <?php echo isset($result['email_address']) ? $result['email_address'] : ''; ?></li>
                <li>Location: <?php echo isset($result['location']) ? $result['location'] : ''; ?></li>
                <li>Username: <?php echo isset($result['username']) ? $result['username'] : ''; ?></li>
                <li>Password: <?php echo isset($result['password']) ? $result['password'] : ''; ?></li>
                <!-- Add other fields you want to display -->
            <?php endforeach; ?>
        <?php elseif (isset($_GET['search_query'])): ?>
            <p>No results found.</p>
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
                <h1 class="recent-articles">User Accounts</h1>
            </div>

            <center>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Location</th>
                        <th>Username</th>
                        <th>password</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "gcms2");
                    if ($conn-> connect_error) {
                        die("Connection failed:". $conn-> connect_error);
                    }

                    $sql = "SELECT id, first_name, last_name, phone_number, email_address, location, username, password FROM user";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . 
                            $row["phone_number"] . "</td><td>" . $row["email_address"] . "</td><td>" . $row["location"] .  "</td><td>" . 
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
        </div>
    </div>


    <script src="index.js"></script>
</body>
</html>