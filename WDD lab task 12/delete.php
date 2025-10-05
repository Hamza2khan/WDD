<?php
include('dbcon.php');

// Debug info
error_log("Delete script accessed - ID: " . ($_GET['id'] ?? 'No ID'));

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // First get student name for confirmation message
    $name_query = "SELECT first_name, last_name FROM student WHERE id = $id";
    $name_result = mysqli_query($conn, $name_query);
    
    if($name_result && mysqli_num_rows($name_result) > 0) {
        $student = mysqli_fetch_assoc($name_result);
        $student_name = $student['first_name'] . ' ' . $student['last_name'];
        
        // Delete the student
        $query = "DELETE FROM student WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if($result){
            error_log("Student deleted successfully: $student_name");
            header('location: index.php?delete_msg=Student "' . $student_name . '" deleted successfully.');
            exit();
        } else {
            $error = "Delete failed: " . mysqli_error($conn);
            error_log($error);
            header('location: index.php?message=Delete failed: ' . urlencode(mysqli_error($conn)));
            exit();
        }
    } else {
        error_log("Student not found with ID: $id");
        header('location: index.php?message=Student not found');
        exit();
    }
} else {
    error_log("No ID provided for deletion");
    header('location: index.php?message=No student ID provided');
    exit();
}
?>