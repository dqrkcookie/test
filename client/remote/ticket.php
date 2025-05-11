<?php

require_once('../../config/conn.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $event_name = $_POST['event_name'] ?? '';
    $issue_type = $_POST['issue_type'] ?? '';
    $description = $_POST['description'] ?? '';

    if (empty($name) || empty($email) || empty($description) || empty($issue_type) || empty($event_name)) {
        echo "<script>alert('Please fill in all required fields.');</script>";
        header("Location: ../submit_ticket.php");
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO client_concern (full_name, email_address, event_name, issue, description) VALUES (?, ?, ?, ?, ?)");
    if ($stmt->execute([$name, $email, $event_name, $issue_type, $description])) {
        echo "<script>alert('Your concern has been submitted successfully!');
        window.history.back();</script>";
    } else {
        echo "<script>alert('There was an error submitting your concern. Please try again later.'); window.history.back();</script>";
    }
}

$pdo = null;

?>
