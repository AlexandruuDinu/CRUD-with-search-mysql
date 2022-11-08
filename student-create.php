<?php
session_start();
?>

<?php include('includes/header.php'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add
                        <a href="index.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" name="firstName" class="form-control"
                                placeholder="Type first name of the student...">
                        </div>
                        <div class="mb-3">
                            <label for="lasttName">Last name</label>
                            <input type="text" name="lastName" class="form-control"
                                placeholder="Type last name of the student...">
                        </div>
                        <div class="mb-3">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control"
                                placeholder="Type the email of the student...">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" class="form-control"
                                placeholder="Type the phone number of the student...">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>