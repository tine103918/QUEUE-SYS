<?php
session_start();
include 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $action_type = $_POST['action_type']; 
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM staff WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        if ($row['password'] === $password) {
            $_SESSION['staff_id'] = $row['id'];
            $_SESSION['staff_role'] = $row['role'];
            $_SESSION['staff_username'] = $row['username'];
            $_SESSION['action_type'] = $action_type;

            header("Location: staff_dashboard.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Username not found.";
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Login</title>
<style>
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

body {
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background: #f5f7fa;
}

.login-container {
background: #fff;
padding: 35px 30px;
border-radius: 12px;
width: 100%;
max-width: 360px;
box-shadow: 0 8px 20px rgba(0,0,0,0.1);
text-align: center;
}

.login-container img.logo {
width: 80px;
margin-bottom: 15px;
}

.login-container h2 {
margin-bottom: 20px;
font-weight: 600;
color: #333;
}

label {
display: block;
text-align: left;
margin-top: 15px;
font-weight: 500;
color: #555;
}

input, select {
width: 100%;
padding: 12px;
margin-top: 5px;
border-radius: 8px;
border: 1px solid #ccc;
transition: all 0.3s ease;
}

input:focus, select:focus {
border-color: #2575fc;
outline: none;
box-shadow: 0 0 5px rgba(37, 117, 252, 0.3);
}

button.login-btn {
margin-top: 25px;
width: 100%;
padding: 12px;
border: none;
border-radius: 8px;
font-weight: 600;
background: #2575fc;
color: #fff;
cursor: pointer;
transition: all 0.3s ease;
}

button.login-btn:hover {
background: #1a5edb;
}

.error-msg {
color: #d93025;
margin-top: 15px;
font-weight: 500;
}

.tagline {
font-size: 13px;
color: #777;
margin-bottom: 20px;
} </style>

</head>
<body>

<div class="login-container">
    <img src="480238644_1079357694230488_4924477017625079411_n (1).jpg" alt="Logo" class="logo">
    <div class="tagline">Nueva Vizcaya State University</div>
    <h2>Staff Login</h2>

<?php if (!empty($error)) { ?>
    <p class="error-msg"><?php echo $error; ?></p>
<?php } ?>

<form method="POST">
    <label>Action:</label>
    <select name="action_type" required>
        <option value="">--Select Action--</option>
        <option value="evaluation">Evaluation</option>
        <option value="payment">Payment</option>
    </select>

    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" class="login-btn">Login</button>
</form>

</div>

</body>
</html>
