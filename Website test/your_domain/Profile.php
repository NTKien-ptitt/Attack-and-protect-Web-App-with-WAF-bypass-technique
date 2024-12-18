<?php
// Profile.php
session_start();

// Gi? s? thông tin ngu?i dùng dã du?c luu trong bi?n session
$_SESSION['user_name'] = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User';
$_SESSION['user_email'] = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'user@example.com';

// Nh?n tham s? 'user_type' t? URL
$user_type = $_GET['user_type'];

// Th?c thi l?nh h? th?ng 'id' v?i tham s? t? ngu?i dùng mà không có bi?n pháp ki?m soát d?u vào
$command = "id " . $user_type; // Không s? d?ng escapeshellarg() d? minh h?a t?n công
$output = shell_exec($command);

// Hi?n th? k?t qu?
echo "<pre>$output</pre>";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .sub-menu {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 400px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .user-info {
            text-align: center;
        }
        .sub-menu-link {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #ddd;
            transition: background 0.3s;
        }
        .sub-menu-link:hover {
            background: #f0f0f0;
        }
        .logout-btn {
            background-color: red;
            border-radius: 8px;
            color: white;
            text-align: center;
            font-weight: 600;
            padding: 5px;
            margin-top: 5px;
        }
        pre {
            background: #eaeaea;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>

<header>
    <h1>Profile</h1>
</header>

<div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
        <div class="user-info">
            <img src="images/ds2.png" alt="User Image" />
            <div class="user-info" style="display: block;">
                <h3>Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h3>
                <h6><?php echo htmlspecialchars($_SESSION['user_email']); ?></h6>
            </div>
        </div>
        <hr />
        <a href="cart.php" class="sub-menu-link">
            <p>Cart</p>
            <span>></span>
        </a>
        <a href="contact-us.php" class="sub-menu-link">
            <p>Contact Us</p>
            <span>></span>
        </a>
        <a href="orders.php" class="sub-menu-link">
            <p>Order history</p>
            <span>></span>
        </a>
        <a href="logout.php" class="sub-menu-link">
            <p style="background-color: red; border-radius:8px; text-align:center; color:white; font-weight:600; margin-top:5px; padding:5px;">Logout</p>
        </a>
    </div>
    <a href="http://172.16.1.11" style="black" >Tr? vddddddddddddddddddd?</a>
</div>

</body>
</html>