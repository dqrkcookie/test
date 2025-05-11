<?php

require_once ('../../config/conn.php');

if(isset($_GET['id'])){
    $id = $_GET['id'] ?? '';
    $table_name = $_GET['table_name'] ?? '';
    $file_name = $_GET['file_name'] ?? '';

    if(empty($id)){
        echo "<script>alert('Invalid request.');</script>";
        header("Location: ../index.php");
        exit();
    }

    $stmt = $pdo->prepare("DELETE FROM $table_name WHERE id = ?");
    if($stmt->execute([$id])){
        echo "<script>alert('Deleted successfully!'); window.location.replace('../$file_name');</script>";
    }else{
        echo "<script>alert('There was an error deleting the concern. Please try again later.'); window.history.back();</script>";
    }
}

$pdo = null;

?>