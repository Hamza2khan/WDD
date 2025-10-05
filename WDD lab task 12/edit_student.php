<?php
include('dbcon.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $student = mysqli_fetch_assoc($result);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    
    $query = "UPDATE student SET 
              first_name = '$first_name', 
              last_name = '$last_name', 
              age = '$age', 
              email = '$email', 
              phone = '$phone', 
              course = '$course' 
              WHERE id = $id";
    
    if(mysqli_query($conn, $query)) {
        header("Location: index.php?message=Student updated successfully");
        exit();
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>First Name *</label>
                                    <input type="text" name="first_name" class="form-control" 
                                           value="<?php echo $student['first_name']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Last Name *</label>
                                    <input type="text" name="last_name" class="form-control" 
                                           value="<?php echo $student['last_name']; ?>" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Age *</label>
                                    <input type="number" name="age" class="form-control" 
                                           value="<?php echo $student['age']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" 
                                           value="<?php echo $student['email']; ?>">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" 
                                           value="<?php echo $student['phone']; ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Course</label>
                                    <input type="text" name="course" class="form-control" 
                                           value="<?php echo $student['course']; ?>">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <a href="index.php" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-warning">Update Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>