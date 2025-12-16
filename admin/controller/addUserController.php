<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../../db.php';

// Ensure POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin/userAccounts.php');
    exit;
}

// Get form data
$userType  = trim($_POST['user_type'] ?? '');
$firstName = trim($_POST['first_name'] ?? '');
$lastName  = trim($_POST['last_name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$password  = $_POST['password'] ?? '';

// Validate inputs
if (!$userType || !$firstName || !$lastName || !$email || !$password) {
    $_SESSION['error'] = 'All fields are required.';
    header('Location: ../admin/userAccounts.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = 'Invalid email address.';
    header('Location: ../admin/userAccounts.php');
    exit;
}

// Check duplicate email
$checkStmt = $conn->prepare(
    "SELECT userID FROM useraccount WHERE email = ?"
);
$checkStmt->bind_param("s", $email);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows > 0) {
    $_SESSION['error'] = 'Email already exists.';
    $checkStmt->close();
    header('Location: ../admin/userAccounts.php');
    exit;
}
$checkStmt->close();

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// INSERT — MATCHES DB COLUMN NAMES EXACTLY ✅
$stmt = $conn->prepare(
    "INSERT INTO useraccount 
     (userType, firstName, lastName, email, password, status)
     VALUES (?, ?, ?, ?, ?, 'Active')"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "sssss",
    $userType,
    $firstName,
    $lastName,
    $email,
    $hashedPassword
);

if ($stmt->execute()) {
    $_SESSION['success'] = 'User account created successfully.';
} else {
    $_SESSION['error'] = 'Failed to create user account.';
}

$stmt->close();
$conn->close();

// Redirect back
header('Location: ../admin/userAccounts.php');
exit;
