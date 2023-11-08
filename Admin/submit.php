<?php
include "config.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT * FROM assdt_users WHERE email_id = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $md5Password = md5($password); 

        if ($md5Password == $user['password'] && $user['is_active'] == "ACTIVE" ) {

            session_start();
            $_SESSION['user_id'] = $user['id'];

            echo json_encode(['success' => true, 'message' => 'Login successful']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Incorrect password']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found']);
    }
}
?>
