<?php

require_once ('../../config/conn.php');

if(isset($_POST['submit'])){
    $event_name = $_POST['event_name'] ?? '';
    $event_date = $_POST['event_date'] ?? '';
    $guest_performers = $_POST['guest_performers'] ?? '';

    if(empty($event_name) || empty($event_date) || empty($guest_performers)){
        echo "<script>alert('Please fill in all required fields.');</script>";
        header("Location: ../submit_ticket.php");
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO event_planner (event_name, event_date, event_performers) VALUES (?, ?, ?)");
    if($stmt->execute([$event_name, $event_date, $guest_performers])){
        echo "<script>alert('Your concern has been submitted successfully!'); window.history.back();</script>";
    }else{
        echo "<script>alert('There was an error submitting your concern. Please try again later.'); window.history.back();</script>";
    }
}

$pdo = null;

?>