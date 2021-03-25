<?php include 'hospital_data.php';
$patient_id = $_GET['p_id'];
$patient_data = $hospitalObj->display_one_patient($patient_id);

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
            <div class="col-3">
                <!-- upload image form -->
                <form action="hospital_data.php" method="post">

                </form>
            </div>
            <div class="col-9">
                <!-- save patient data -->
                <div class="card mt-5">
                    <div class="card-header bg-info text-light text-center">
                        Add Patient Information
                    </div>
                    <div class="card-body">
                        <form action="hospital_data.php" method="post">
                            <div class="row mt-3">
                                <div class="col-4">
                                <input type="hidden" name="id" value="<?php echo $patient_id ?>">
                                    <input type="text" name="healthcare" placeholder="<?php echo $patient_data['patient_healthcare'] ?>" id="" class="form-control">
                                </div></div>
                                <div class="col-8">
                                    <input type="text" name="fullname" id="" placeholder="<?php echo $patient_data['patient_fullname'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3"> 
                                <div class="col-3">
                                    <input type="text" name="age" placeholder="<?php echo $patient_data['patient_age'] ?>" id="" class="form-control">
                                </div>
                                <div class="col-5">
                                    <input type="text" name="contact" placeholder="<?php echo $patient_data['patient_contact'] ?>" id="" class="form-control">
                                </div>
                                <div class="col-4">
                                    <input type="date" name="bdate" value="<?php  echo $patient_data['patient_bdate'] ?>" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" name="update_patient" class="btn btn-outline-info btn-block ">Save Patient</button>
                                </div>
                            </div>
                        </form>
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