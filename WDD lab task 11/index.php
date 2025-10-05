<?php 
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { 
            background: #f8f9fa; 
            font-family: Arial, sans-serif; 
        }
        .header { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            color: white; 
            padding: 20px 0; 
        }
        .card { 
            border-radius: 10px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
            margin-bottom: 20px; 
            border: none;
        }
        .card-header { 
            background: #3498db; 
            color: white; 
            border-radius: 10px 10px 0 0 !important; 
            border: none;
            font-weight: 600;
        }
        .table th {
            background-color: #2c3e50;
            color: white;
        }
        .btn-group .btn {
            margin: 0 2px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1><i class="fas fa-graduation-cap"></i> Student Management System</h1>
            <p class="mb-0">Complete CRUD Application - Lab Task 11 & 12</p>
        </div>
    </div>

    <div class="container mt-4">
        <!-- Success Messages -->
        <?php if(isset($_GET['insert_msg'])): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($_GET['insert_msg']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <?php if(isset($_GET['delete_msg'])): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <i class="fas fa-trash"></i> <?php echo htmlspecialchars($_GET['delete_msg']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET['message'])): ?>
            <div class="alert alert-info alert-dismissible fade show">
                <i class="fas fa-info-circle"></i> <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Dashboard Header -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-1"><i class="fas fa-tachometer-alt"></i> Student Dashboard</h4>
                                <p class="text-muted mb-0">Manage all student records in one place</p>
                            </div>
                            <a href="form.php" class="btn btn-primary btn-lg">
                                <i class="fas fa-user-plus"></i> Add New Student
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row mb-4">
            <?php
            // Get statistics
            $total_query = "SELECT COUNT(*) as total FROM student";
            $total_result = mysqli_query($conn, $total_query);
            $total_students = ($total_result) ? mysqli_fetch_assoc($total_result)['total'] : 0;
            
            $age_query = "SELECT AVG(age) as avg_age FROM student";
            $age_result = mysqli_query($conn, $age_query);
            $avg_age = ($age_result && mysqli_num_rows($age_result) > 0) ? round(mysqli_fetch_assoc($age_result)['avg_age'], 1) : 0;
            
            $recent_query = "SELECT COUNT(*) as recent FROM student WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)";
            $recent_result = mysqli_query($conn, $recent_query);
            $recent_students = ($recent_result) ? mysqli_fetch_assoc($recent_result)['recent'] : 0;
            ?>
            
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-2x mb-2"></i>
                        <h3><?php echo $total_students; ?></h3>
                        <p class="mb-0">Total Students</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body text-center">
                        <i class="fas fa-birthday-cake fa-2x mb-2"></i>
                        <h3><?php echo $avg_age; ?></h3>
                        <p class="mb-0">Average Age</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-user-plus fa-2x mb-2"></i>
                        <h3><?php echo $recent_students; ?></h3>
                        <p class="mb-0">New This Week</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-2x mb-2"></i>
                        <h3>CRUD</h3>
                        <p class="mb-0">All Operations</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Students Table -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fas fa-list"></i> All Students
                    <span class="badge bg-secondary ms-2"><?php echo $total_students; ?> records</span>
                </h5>
                <div>
                    <a href="form.php" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?php
                $query = "SELECT * FROM student ORDER BY id DESC";
                $result = mysqli_query($conn, $query);
                
                if($result && mysqli_num_rows($result) > 0) {
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><strong>#<?php echo $row['id']; ?></strong></td>
                                <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                                <td>
                                    <span class="badge bg-primary rounded-pill"><?php echo $row['age']; ?> yrs</span>
                                </td>
                                <td>
                                    <?php if(!empty($row['email'])): ?>
                                        <i class="fas fa-envelope text-muted me-1"></i>
                                        <?php echo htmlspecialchars($row['email']); ?>
                                    <?php else: ?>
                                        <span class="text-muted">N/A</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(!empty($row['phone'])): ?>
                                        <i class="fas fa-phone text-muted me-1"></i>
                                        <?php echo htmlspecialchars($row['phone']); ?>
                                    <?php else: ?>
                                        <span class="text-muted">N/A</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(!empty($row['course'])): ?>
                                        <i class="fas fa-book text-muted me-1"></i>
                                        <?php echo htmlspecialchars($row['course']); ?>
                                    <?php else: ?>
                                        <span class="text-muted">N/A</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <small class="text-muted">
                                        <?php echo date('M j, Y', strtotime($row['created_at'])); ?>
                                    </small>
                                </td>
                                <td>
    <div class="btn-group" role="group">
        <!-- View Button -->
        <a href="view_student.php?id=<?php echo $row['id']; ?>" 
           class="btn btn-info btn-sm" 
           title="View Student Details">
            <i class="fas fa-eye"></i>
        </a>
        
        <!-- Edit Button -->
        <a href="edit_student.php?id=<?php echo $row['id']; ?>" 
           class="btn btn-warning btn-sm" 
           title="Edit Student">
            <i class="fas fa-edit"></i>
        </a>
        
        <!-- Delete Button -->
        <a href="delete.php?id=<?php echo $row['id']; ?>" 
           class="btn btn-danger btn-sm" 
           onclick="return confirm('Are you sure you want to delete <?php echo htmlspecialchars($row['first_name'] . ' ' . $row['last_name']); ?>?')"
           title="Delete Student">
            <i class="fas fa-trash"></i>
        </a>
    </div>
</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Summary Info -->
                <div class="alert alert-light mt-3">
                    <i class="fas fa-info-circle text-primary"></i>
                    Showing <strong><?php echo mysqli_num_rows($result); ?></strong> student record(s). 
                    Use the action buttons to manage student records.
                </div>

                <?php } else { ?>
                <!-- Empty State -->
                <div class="text-center py-5">
                    <i class="fas fa-users fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">No Students Found</h4>
                    <p class="text-muted mb-4">There are no student records in the database yet.</p>
                    <a href="form.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-user-plus"></i> Add Your First Student
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Quick Info -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="fas fa-info-circle"></i> System Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <small class="text-muted">
                                    <strong>Lab Task 11:</strong> CREATE & READ Operations<br>
                                    <strong>Lab Task 12:</strong> UPDATE & DELETE Operations
                                </small>
                            </div>
                            <div class="col-md-6 text-end">
                                <small class="text-muted">
                                    <strong>Total Records:</strong> <?php echo $total_students; ?><br>
                                    <strong>Last Updated:</strong> <?php echo date('F j, Y, g:i a'); ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2024 Student Management System | Lab Task 11 & 12 - Complete CRUD Operations</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                if(alert.classList.contains('alert-dismissible')) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            });
        }, 5000);

        // Enhanced delete confirmation
        function confirmDelete(studentName) {
            return confirm('Are you sure you want to delete "' + studentName + '"? This action cannot be undone.');
        }
    </script>
</body>
</html>