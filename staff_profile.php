<?php
include "db_connect.php";
session_start();

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    $query = "SELECT first_name, last_name, group_id, phone_number, email_address, physical_address, next_of_kin, kin_phone_number, username, password 
    FROM staff WHERE username = :userId";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="https://fontawesome.com/search?f=brands&o=r"> 
    <title>User profile</title>
    <script src="staff_profile_java.js"></script>
</head>
<body>
    <header>
        <div class="logosec">
            <div class="logo">Dawac Garbage Collectors</div>
            <img src="images/menu.png" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>
        <div class="searchbar">
            <input type="text"
                   placeholder="Search">
            <div class="searchbtn">
              <img src="images/search.jpg" class="icn srchicn" alt="search-icon">
              </div>
        </div>
        <div class="message">
            <div class="circle"></div>
            <img src="images/bell.jpg" class="icn" alt="">
            <div class="dp">
                <img src="images/dp.jpg" class="dpicn" alt="dp">
            </div>
        </div>
    </header>

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
                        <img src="images/dp.jpg" class="nav-img" alt="profile">
                        <a href="staff_profile.php"><h3>Profile</h3></a>
                    </div>

                    <div class="nav-option logout">
                        <img src="images/logout.jpg" class="nav-img" alt="logout">
                        <a href="staff_logout.php"><h3>Logout</h3></a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="profile-container">
            <h1>Profile page</h1>
            <div id="profile-details">
                <div class="profile-details-item">
                    <label>First Name:</label>
                    <span id="first-name"><?php echo isset($userData['first_name']) ? $userData['first_name'] : ''; ?></span>
                    <input type="text" id="edit-first-name" style="display: none;">
                    <button class="edit-button" onclick="editField('first-name')">Edit</button>
                    <button class="save-button" onclick="saveField('first-name')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Last Name:</label>
                    <span id="last-name"><?php echo isset($userData['last_name']) ? $userData['last_name'] : ''; ?></span>
                    <input type="text" id="edit-last-name" style="display: none;">
                    <button class="edit-button" onclick="editField('last-name')">Edit</button>
                    <button class="save-button" onclick="saveField('last-name')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Group ID:</label>
                    <span id="group_id"><?php echo isset($userData['group_id']) ? $userData['group_id'] : ''; ?></span>
                    <input type="text" id="edit-last-name" style="display: none;">
                    <button class="edit-button" onclick="editField('group_id')">Edit</button>
                    <button class="save-button" onclick="saveField('group_id')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Phone Number:</label>
                    <span id="phone_number"><?php echo isset($userData['phone_number']) ? $userData['phone_number'] : ''; ?></span>
                    <input type="text" id="edit-phone_number" style="display: none;">
                    <button class="edit-button" onclick="editField('phone_number')">Edit</button>
                    <button class="save-button" onclick="saveField('phone_number')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Email Address:</label>
                    <span id="email_address"><?php echo isset($userData['email_address']) ? $userData['email_address'] : ''; ?></span>
                    <input type="text" id="edit-email_address" style="display: none;">
                    <button class="edit-button" onclick="editField('email_address')">Edit</button>
                    <button class="save-button" onclick="saveField('email_address')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Physical Address:</label>
                    <span id="physical_address"><?php echo isset($userData['physical_address']) ? $userData['physical_address'] : ''; ?></span>
                    <input type="text" id="edit-physical_address" style="display: none;">
                    <button class="edit-button" onclick="editField('physical_address')">Edit</button>
                    <button class="save-button" onclick="saveField('physical_address')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Next of Kin:</label>
                    <span id="next_of_kin"><?php echo isset($userData['next_of_kin']) ? $userData['next_of_kin'] : ''; ?></span>
                    <input type="text" id="edit-next_of_kin" style="display: none;">
                    <button class="edit-button" onclick="editField('next_of_kin')">Edit</button>
                    <button class="save-button" onclick="saveField('next_of_kin')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Kin's Phone No:</label>
                    <span id="kin_phone_number"><?php echo isset($userData['kin_phone_number']) ? $userData['kin_phone_number'] : ''; ?></span>
                    <input type="text" id="edit-kin_phone_number" style="display: none;">
                    <button class="edit-button" onclick="editField('kin_phone_number')">Edit</button>
                    <button class="save-button" onclick="saveField('kin_phone_number')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Username:</label>
                    <span id="username"><?php echo isset($userData['username']) ? $userData['username'] : ''; ?></span>
                    <input type="text" id="edit-username" style="display: none;">
                    <button class="edit-button" onclick="editField('username')">Edit</button>
                    <button class="save-button" onclick="saveField('username')">Save</button>
                </div>
                <div class="profile-details-item">
                    <label>Password:</label>
                    <span id="password"><?php echo isset($userData['password']) ? $userData['password'] : ''; ?></span>
                    <input type="text" id="edit-password" style="display: none;">
                    <button class="edit-button" onclick="editField('password')">Edit</button>
                    <button class="save-button" onclick="saveField('password')">Save</button>
                </div>

            </div>
        </div>
    </div>


    <script src="index.js"></script>
</body>
</html>