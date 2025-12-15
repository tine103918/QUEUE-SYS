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
    <a href="../logout.php" class="text-white">Logout</a>
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
    <div class="flex-fill p-4">
        <h4>Welcome, Admin</h4>
        <p>This is your dashboard content.</p>
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

<!-- CONTENT -->
<div class="container mt-4" style="margin-left: 260px; padding: 20px;">

    <h4>Welcome, Admin</h4>
    <p>This is your dashboard. You can modify this content.</p>

    <div class="row mt-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Description of feature.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open</a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Description of feature.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open</a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Description of feature.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open</a>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
