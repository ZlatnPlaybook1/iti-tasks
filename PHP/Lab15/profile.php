<?php
session_start(); 

if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit();
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$image = $_SESSION['image'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f8f9fa;
    }

    .profile-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        text-align: center;
        color: #007bff;
    }

    .profile-img {
        display: block;
        margin: 20px auto;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-info {
        text-align: center;
        margin-top: 20px;
    }

    .profile-info p {
        font-size: 1.2em;
        color: #333333;
    }
    </style>
</head>

<body>

    <div class="profile-container">
        <h1 class="profile-header">Your Profile</h1>
        <img src="<?php echo $image; ?>" alt="Profile Image" class="profile-img">
        <div class="profile-info">
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>