<?php
// editUserModal.php
?>

<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- MODAL HEADER -->
            <div class="modal-header" style="background-color:#660B0B;">
                <h5 class="modal-title text-white" id="editUserModalLabel">
                    Edit User Account
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- FORM -->
            <form method="POST" action="../updateUser.php">

                <!-- MODAL BODY -->
                <div class="modal-body">

                    <!-- HIDDEN USER ID -->
                    <input type="hidden" id="edit_user_id" name="user_id">

                    <!-- USER TYPE -->
                    <div class="mb-3">
                        <label class="form-label">User Type</label>
                        <select id="edit_user_type" name="user_type" class="form-select" required>
                            <option value="Admin">Admin</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>

                    <!-- FIRST NAME -->
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input
                            type="text"
                            id="edit_first_name"
                            name="first_name"
                            class="form-control"
                            required
                        >
                    </div>

                    <!-- LAST NAME -->
                    <div class="mb-3">
                        <lab
