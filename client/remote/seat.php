<?php

require_once ('../../config/conn.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $event_name = $_POST['event_name'] ?? '';
    $ticket_id = $_POST['ticket_id'] ?? '';
    $current_seat = $_POST['current_seat'] ?? '';
    $description = $_POST['description'] ?? '';

    if(empty($name) || empty($email) || empty($description) || empty($ticket_id) || empty($event_name)){
        echo "<script>alert('Please fill in all required fields.');</script>";
        header("Location: ../submit_seat_plan_concern.php");
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO seat_concern (full_name, email_address, event_name, ticket_id, seat_number, description) VALUES (?, ?, ?, ?, ?, ?)");
    if($stmt->execute([$name, $email, $event_name, $ticket_id, $current_seat, $description])){
        echo "<script>alert('Your concern has been submitted successfully!'); window.history.back();</script>";
    }else{
        echo "<script>alert('There was an error submitting your concern. Please try again later.'); window.history.back();</script>";
    }
}

$pdo = null;

?>
