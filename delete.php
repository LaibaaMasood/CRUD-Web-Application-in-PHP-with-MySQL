<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE student_id=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
