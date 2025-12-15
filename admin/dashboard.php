<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* SIDEBAR */
        .sidebar {
            width: 220px;
            min-height: 100vh;
            background-color: #660B0B;
            transition: 0.3s;
        }

        /* COLLAPSED */
        .sidebar.collapsed {
            width: 70px;
        }

        /* MENU */
        .sidebar .nav-link {
            color: #fff;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
        }

        .sidebar i {
            font-size: 1.2rem;
        }

        /* HIDE TEXT WHEN COLLAPSED */
        .sidebar.collapsed span {
            display: none;
        }

        /* ACTIVE MENU */
        .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.2);
            border-radius: 5px;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -220px;
                z-index: 1000;
            }

            .sidebar.show {
                left: 0;
            }
        }
    </style>
</style>
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-dark px-4" style="background-color: #660B0B;">
    <span class="navbar-brand">Queueing System</span>
    
    <a href="../logout.php" class="text-white text-decoration-none">Logout <i class="bi bi-box-arrow-right"></i></a>
</nav>

<!-- SIDEBAR -->
<div class="d-flex">
    <div id="sidebar" class="sidebar p-3">
    <div class="d-flex justify-content-end">
        <button class="btn btn-sm p-1 border-0 bg-transparent text-white" onclick="toggleSidebar()">
            <i class="bi bi-caret-left-fill fs-5"></i>
        </button>
    </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= $active=='dashboard'?'active':'' ?>" href="dashboard.php">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $active=='users'?'active':'' ?>" href="users.php">
                    <i class="bi bi-people"></i>
                    <span>User Accounts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $active=='departments'?'active':'' ?>" href="departments.php">
                    <i class="bi bi-building"></i>
                    <span>Departments</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $active=='programs'?'active':'' ?>" href="programs.php">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>Programs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $active=='students'?'active':'' ?>" href="students.php">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Students</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
<div class="flex-fill p-3">

    <h5 class="mb-2">Welcome, Admin</h5>
    <p class="text-muted mb-3">Enrollment Overview</p>

    <div class="row g-2 
                row-cols-1 
                row-cols-sm-2 
                row-cols-md-3 
                row-cols-lg-5">

        <!-- TOTAL -->
        <div class="col">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body p-2">
                    <i class="bi bi-people-fill fs-4 text-primary"></i>
                    <div class="small mt-1">Total</div>
                    <div class="fw-bold fs-5">1,250</div>
                </div>
            </div>
        </div>

        <!-- BSCS -->
        <div class="col">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body p-2">
                    <i class="bi bi-laptop-fill fs-4 text-success"></i>
                    <div class="small mt-1">BSCS</div>
                    <div class="fw-bold fs-5">320</div>
                </div>
            </div>
        </div>

        <!-- BSIT -->
        <div class="col">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body p-2">
                    <i class="bi bi-pc-display fs-4 text-warning"></i>
                    <div class="small mt-1">BSIT</div>
                    <div class="fw-bold fs-5">410</div>
                </div>
            </div>
        </div>

        <!-- BSINTE -->
        <div class="col">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body p-2">
                    <i class="bi bi-gear-fill fs-4 text-info"></i>
                    <div class="small mt-1">BSINTE</div>
                    <div class="fw-bold fs-5">280</div>
                </div>
            </div>
        </div>

        <!-- BSHM -->
        <div class="col">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body p-2">
                    <i class="bi bi-building fs-4 text-danger"></i>
                    <div class="small mt-1">BSHM</div>
                    <div class="fw-bold fs-5">240</div>
                </div>
            </div>
        </div>

    </div>
</div>




</div>

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
