<?php
include('dbcon.php');

if(!isset($_GET['id'])) {
    header("Location: index.php?message=No student ID provided");
    exit();
}

$id = intval($_GET['id']);
$query = "SELECT * FROM student WHERE id = $id";
$result = mysqli_query($conn, $query);

if(!$result || mysqli_num_rows($result) == 0) {
    header("Location: index.php?message=Student not found");
    exit();
}

$student = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student - <?php echo $student['first_name'] . ' ' . $student['last_name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background: #f8f9fa; font-family: Arial, sans-serif; }
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px 0; }
        .card { border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: none; }
        .student-photo { 
            width: 150px; 
            height: 150px; 
            border-radius: 50%; 
            object-fit: cover; 
            border: 5px solid #3498db;
            margin: 0 auto;
        }
        .info-label { font-weight: 600; color: #2c3e50; }
        .info-value { color: #34495e; }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1><i class="fas fa-graduation-cap"></i> Student Details</h1>
        </div>
    </div>

    <div class="container mt-4">
        <!-- Back Button -->
        <div class="row mb-3">
            <div class="col-12">
                <a href="index.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mb-0">
                            <i class="fas fa-user-circle"></i> 
                            <?php echo htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?>
                        </h3>
                        <p class="mb-0">Student ID: #<?php echo $student['id']; ?></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Student Photo Placeholder -->
                            <div class="col-md-4 text-center mb-4">
                                <div class="student-photo-placeholder bg-light d-flex align-items-center justify-content-center rounded-circle mx-auto" 
                                     style="width: 150px; height: 150px; border: 5px solid #3498db;">
                                    <i class="fas fa-user fa-4x text-muted"></i>
                                </div>
                                <h5 class="mt-3"><?php echo htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?></h5>
                                <p class="text-muted">Student</p>
                            </div>

                            <!-- Student Information -->
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">First Name</div>
                                        <div class="info-value fs-5"><?php echo htmlspecialchars($student['first_name']); ?></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">Last Name</div>
                                        <div class="info-value fs-5"><?php echo htmlspecialchars($student['last_name']); ?></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">Age</div>
                                        <div class="info-value">
                                            <span class="badge bg-primary fs-6"><?php echo $student['age']; ?> years old</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">Student ID</div>
                                        <div class="info-value">
                                            <span class="badge bg-secondary fs-6">#<?php echo $student['id']; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">
                                            <i class="fas fa-envelope text-muted me-1"></i> Email
                                        </div>
                                        <div class="info-value">
                                            <?php if(!empty($student['email'])): ?>
                                                <a href="mailto:<?php echo $student['email']; ?>" class="text-decoration-none">
                                                    <?php echo htmlspecialchars($student['email']); ?>
                                                </a>
                                            <?php else: ?>
                                                <span class="text-muted">Not provided</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">
                                            <i class="fas fa-phone text-muted me-1"></i> Phone
                                        </div>
                                        <div class="info-value">
                                            <?php if(!empty($student['phone'])): ?>
                                                <a href="tel:<?php echo $student['phone']; ?>" class="text-decoration-none">
                                                    <?php echo htmlspecialchars($student['phone']); ?>
                                                </a>
                                            <?php else: ?>
                                                <span class="text-muted">Not provided</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="info-label">
                                            <i class="fas fa-book text-muted me-1"></i> Course
                                        </div>
                                        <div class="info-value">
                                            <?php if(!empty($student['course'])): ?>
                                                <span class="badge bg-info fs-6"><?php echo htmlspecialchars($student['course']); ?></span>
                                            <?php else: ?>
                                                <span class="text-muted">Not specified</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">
                                            <i class="fas fa-calendar text-muted me-1"></i> Created Date
                                        </div>
                                        <div class="info-value">
                                            <?php echo date('F j, Y', strtotime($student['created_at'])); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="info-label">
                                            <i class="fas fa-clock text-muted me-1"></i> Created Time
                                        </div>
                                        <div class="info-value">
                                            <?php echo date('g:i A', strtotime($student['created_at'])); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="edit_student.php?id=<?php echo $student['id']; ?>" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit Student
                                    </a>
                                    <a href="delete.php?id=<?php echo $student['id']; ?>" class="btn btn-danger"
                                       onclick="return confirm('Are you sure you want to delete <?php echo htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?>?')">
                                        <i class="fas fa-trash"></i> Delete Student
                                    </a>
                                    <a href="index.php" class="btn btn-secondary">
                                        <i class="fas fa-list"></i> Back to List
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats Card -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="fas fa-chart-bar"></i> Student Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="text-primary">
                                    <i class="fas fa-id-card fa-2x mb-2"></i>
                                    <div>ID #<?php echo $student['id']; ?></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-success">
                                    <i class="fas fa-birthday-cake fa-2x mb-2"></i>
                                    <div><?php echo $student['age']; ?> Years</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-warning">
                                    <i class="fas fa-calendar-day fa-2x mb-2"></i>
                                    <div><?php echo date('M Y', strtotime($student['created_at'])); ?></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-info">
                                    <i class="fas fa-user-check fa-2x mb-2"></i>
                                    <div>Active</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2024 Student Management System | Student Details View</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>