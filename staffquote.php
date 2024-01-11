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
    <link rel="stylesheet" href="CSS/dash_quote.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>Service Quotes</title>
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

            $sql = "SELECT * FROM pending_quotes WHERE service_id LIKE :search_query";
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
                <li>Staff Group ID: <?php echo isset($result['staff_group_id']) ? $result['staff_group_id'] : ''; ?></li>
                <li>Staff Group Name: <?php echo isset($result['staff_group_name']) ? $result['staff_group_name'] : ''; ?></li>
                <li>Service name: <?php echo isset($result['service_assigned']) ? $result['service_assigned'] : ''; ?></li>
                <li>Service ID: <?php echo isset($result['service_id']) ? $result['service_id'] : ''; ?></li>
                <li>User ID: <?php echo isset($result['user_id']) ? $result['user_id'] : ''; ?></li>
                <li>Location: <?php echo isset($result['location']) ? $result['location'] : ''; ?></li>
                <li>Date Assigned: <?php echo isset($result['date_assigned']) ? $result['date_assigned'] : ''; ?></li>
                <li>Deadline date: <?php echo isset($result['date_completed']) ? $result['date_completed'] : ''; ?></li>
                <!-- Add other fields you want to display -->
                <?php endforeach; ?>
            </ul>
        <?php elseif (isset($_GET['search_query'])): ?>
            <p>No results found for pending Quotes.</p>
        <?php endif; ?>

    </div>

    <!-- Display search results for the second table -->
    <div class="search-results">
        <?php
        if (isset($_GET['search_query'])) {
            $search_query = $_GET['search_query'];

            $sql = "SELECT * FROM submitted_requests WHERE id LIKE :search_query";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':search_query', '%' . $search_query . '%');
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <?php if (isset($results) && !empty($results)): ?>
            <h2>Search Results - Submitted Requests:</h2>
            <ul>
            <?php foreach ($results as $result): ?>
                <li>ID: <?php echo isset($result['id']) ? $result['id'] : ''; ?></li>
                <li>First name: <?php echo isset($result['first_name']) ? $result['first_name'] : ''; ?></li>
                <li>Last name: <?php echo isset($result['last_name']) ? $result['last_name'] : ''; ?></li>
                <li>Email Address: <?php echo isset($result['email']) ? $result['email'] : ''; ?></li>
                <li>Phone number: <?php echo isset($result['mobile']) ? $result['mobile'] : ''; ?></li>
                <li>Username: <?php echo isset($result['username']) ? $result['username'] : ''; ?></li>
                <li>Service Name: <?php echo isset($result['service_name']) ? $result['service_name'] : ''; ?></li>
                <li>City: <?php echo isset($result['city']) ? $result['city'] : ''; ?></li>
                <li>Service: <?php echo isset($result['service']) ? $result['service'] : ''; ?></li>
                <li>Message: <?php echo isset($result['message']) ? $result['message'] : ''; ?></li>
                <!-- Add other fields you want to display -->
            <?php endforeach; ?>
            </ul>
        <?php elseif (isset($_GET['search_query'])): ?>
            <p>No results found for submitted requests.</p>
        <?php endif; ?>

    </div>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="images/dashboard.jpg" class="nav-img" alt="dashboard">
                        <a href="staffpage.php"><h3>Dashboard</h3></a>
                    </div>

                    <div class="option2 nav-option">
                        <img src="images/service.jpg" class="nav-img" alt="qoutes">
                        <a href="staffquote.php"><h3>Service Quotes</h3></a>
                    </div>

                    <div class="nav-option option3">
                        <img src="images/staff.jpg" class="nav-img" alt="staff">
                        <a href="staff_staff.php"><h3>Staff</h3></a>
                    </div>

                    <div class="nav-option option5">
                        <img src="images/profile.jpg" class="nav-img" alt="profile">
                        <a href="staff_profile.php"><h3>Profile</h3></a>
                    </div>

                    <div class="nav-option logout">
                        <img src="images/logout.jpg" class="nav-img" alt="logout">
                        <a href="staff_logout.php"><h3>Logout</h3></a>
                    </div>
                </div>
            </nav>
        </div> 

        <div class="main">
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-articles">Pending Quotes</h1>
                </div>

                <center>
                    <table>
                    <tr>
                        <th>ID</th>
                        <th>Staff Group ID</th>
                        <th>Staff Group Name</th>
                        <th>Service Name</th>
                        <th>Service ID</th>
                        <th>User ID</th>
                        <th>Location</th>
                        <th>Date Assigned</th>
                        <th>Deadline Date</th>
                        </tr>
                        <?php
                    $conn = mysqli_connect("localhost", "root", "", "gcms2");
                    if ($conn-> connect_error) {
                        die("Connection failed:". $conn-> connect_error);
                    }

                    $sql = "SELECT id, staff_group_id, staff_group_name, service_assigned, service_id, user_id, location, date_assigned, date_completed FROM pending_quotes";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["staff_group_id"] . "</td><td>" . $row["staff_group_name"] . "</td><td>" . 
                            $row["service_assigned"] . "</td><td>" . $row["service_id"] . "</td><td>" . $row["user_id"] . "</td><td>" . $row["location"] . "</td><td>" . 
                            $row["date_assigned"] . "</td><td>" .$row["date_completed"] . "</td></tr>";
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
            
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-articles">Submitted Service Requests</h1>
                </div>

                <center>
            
                    <table>
                        <tr>
                        <th>ID</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Username</th>
                            <th>Service Name</th>
                            <th>City</th>
                            <th>Service</th>
                            <th>Message</th>
                        </tr>
                        <?php
                    $conn = mysqli_connect("localhost", "root", "", "gcms2");
                    if ($conn-> connect_error) {
                        die("Connection failed:". $conn-> connect_error);
                    }

                    $sql = "SELECT id, first_name, last_name, email, mobile, username, service_name, city, service, message FROM submitted_requests";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . 
                            $row["email"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["username"] . "</td><td>" . 
                            $row["service_name"] . "</td><td>" . $row["city"] . "</td><td>" . $row["service"] . "</td><td>" . $row["message"] . "</td></tr>";
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

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-articles">Service Requests</h1>
                </div>

                <center>
            
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Client Name</th>
                            <th>Location</th>
                            <th>Request Date</th>
                            <th>Deadline Date</th>
                            <th>Assigned to</th>
                        </tr>
                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "gcms2");
                            if ($conn-> connect_error) {
                                die("Connection failed:". $conn-> connect_error);
                            }

                            $sql = "SELECT id, name, client_name, location, request_date, deadline_date, assigned_to FROM service_request";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["client_name"] . "</td><td>" . 
                                    $row["location"] . "</td><td>" . $row["request_date"] . "</td><td>" . $row["deadline_date"] . "</td><td>" . 
                                    $row["assigned_to"] . "</td></tr>";
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
    </div> 


    
    <script src="index.js"></script>
</body>
</html>