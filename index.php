<?php

session_start();
require('dbcon.php');

?>
<?php include('includes/header.php'); ?>


<div class="container p-4">
    <form action="student-search.php" method="POST" name="search">
        <div class="input-group mb-4">
            <input type="search" class="form-control rounded" placeholder="Search" name="searchbar" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary" name="search_button">Search</button>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Details
                        <a href="student-create.php" class="btn btn-primary float-end">Add Student to Class</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>E-mail</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM students";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $student) {
                            ?>
                            <tr>
                                <td>
                                    <?= $student['id']; ?>
                                </td>
                                <td>
                                    <?= $student['firstName']; ?>
                                </td>
                                <td>
                                    <?= $student['lastName']; ?>
                                </td>
                                <td>
                                    <?= $student['email']; ?>
                                </td>
                                <td>
                                    <?= $student['phone'] ?>
                                </td>

                                <td>
                                    <a href="student-view.php?id=<?= $student['id']; ?>"
                                        class="btn btn-info btn-sm">View Students</a>
                                    <form action="code.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete_student" value="<?= $student['id']; ?>"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            } else {
                                echo "<h5>No records found!</h5>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');