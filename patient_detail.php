<?php
include 'hospital_data.php';

$id = $_GET['p_id'];
$one_patient = $hospitalObj->display_one_patient($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <?php include 'nav.php' ?>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <!-- img -->
            </div>
            <div class="col-5">
                <div class="card mx-auto mt-5">
                    <div class="card-header bg-info text-light text-center">
                        <h1 class="display-4">
                            PATIENT DETAILS
                        </h1>
                    </div>
                    <div class="card-body">
                        Patient Name: <?php echo $one_patient['patient_fullname'] ?>
                        <hr>
                        Patient Age : <?php echo $one_patient['patient_age'] ?>
                        <hr>
                        Patient Contact : <?php echo $one_patient['patient_contact'] ?>
                        <hr>
                        Patient Birthdate: <?php echo $one_patient['patient_bdate'] ?>
                        <hr>
                        Patient Healthcare: <?php echo $one_patient['patient_healthcare'] ?>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <a href="update_patient.php?p_id=<?php echo $id ?>" class="btn btn-info">Update Patient Info</a>
                        <a href="delete_patient.php?p_id=<?php echo $id ?>" class="float-right btn btn-danger">Delete Patient Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>