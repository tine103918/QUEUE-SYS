<?php
// addUserModal.php
?>

<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- MODAL HEADER -->
            <div class="modal-header" style="background-color:#660B0B;">
                <h5 class="modal-title text-white" id="addUserModalLabel">
                    Add User Account
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- FORM -->
            <form method="POST" action="addUser.php">

                <!-- MODAL BODY -->
                <div class="modal-body">

                    <!-- USER TYPE -->
                    <div class="mb-3">
                        <label class="form-label">User Type</label>
                        <select name="user_type" class="form-select" required>
                            <option value="" selected disabled>Select user type</option>
                            <option value="Admin">Admin</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>

                    <!-- FIRST NAME -->
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <!-- LAST NAME -->
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>

                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                </div>

                <!-- MODAL FOOTER -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-sm text-white" style="background-color:#660B0B;">
                        Save User
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
