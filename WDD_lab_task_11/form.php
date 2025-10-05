<?php
// Handle form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('dbcon.php');
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    
    // Simple validation
    if(empty($first_name) || empty($last_name) || empty($age)) {
        $error = "Please fill all required fields (First Name, Last Name, Age)";
    } else {
        $query = "INSERT INTO student (first_name, last_name, age, email, phone, course) 
                  VALUES ('$first_name', '$last_name', '$age', '$email', '$phone', '$course')";
        
        if(mysqli_query($conn, $query)) {
            header("Location: index.php?insert_msg=Student added successfully");
            exit();
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background: #f8f9fa; }
        .card { border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .card-header { background: #3498db; color: white; border-radius: 10px 10px 0 0 !important; }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0"><i class="fas fa-user-plus"></i> Add New Student</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" name="first_name" class="form-control" required 
                                           placeholder="Enter first name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" name="last_name" class="form-control" required
                                           placeholder="Enter last name">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Age *</label>
                                    <input type="number" name="age" class="form-control" min="1" max="100" required
                                           placeholder="Enter age">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                           placeholder="Enter email">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                           placeholder="Enter phone number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Course</label>
                                    <input type="text" name="course" class="form-control"
                                           placeholder="e.g., Computer Science">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4">
                                <a href="index.php" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Save Student
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>