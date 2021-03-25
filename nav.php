
<nav class="navbar navbar-expand navbar-light bg-info">
            <div class="nav navbar-nav w-75">

                <a class="nav-item nav-link text-light mr-3" href="patient_list.php">Patient List</a>
                <a class="nav-item nav-link text-light mr-3" href="#">Doctor List</a>
                <a class="nav-item nav-link text-light mr-3" href="add_patient.php">Add Patient</a>

            </div>
            <div class="w-25 float-left">
                <a href="profile.php" class="mr-5 text-light">Hello <?php echo $_SESSION['uname'] ?></a>
                <a href="logout.php" class="ml-5 text-light">Logout</a>
            </div>
</nav>