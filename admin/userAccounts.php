<?php
$active = 'users'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="bg-light">
<?php include 'navbar.php'; ?>
<div class="d-flex">
    <?php include 'sidebar.php'; ?>
    <!-- MAIN CONTENT -->
    <div class="flex-fill p-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">User Accounts</h5>
            <button 
                class="btn btn-sm text-white"
                data-bs-toggle="modal"
                data-bs-target="#addUserModal"
                style="background-color:#630000;"
            >
                <i class="bi bi-plus-circle"></i> Add User Account
            </button>
        </div>

        <!-- USER TABLE -->
        <div class="card shadow-sm">
            <div class="card-header fw-bold">
                User Accounts List
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>User Type</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Admin</td>
                                <td>Charlene</td>
                                <td>Dela Cruz</td>
                                <td>admin@yahoo.com</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning text-white">
                                        Status
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include 'modal/addUserModal.php'; ?>
<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');

    if (window.innerWidth <= 768) {
        sidebar.classList.toggle('show');
    } else {
        sidebar.classList.toggle('collapsed');
    }
}
</script>
</body>
</html>
