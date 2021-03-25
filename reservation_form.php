<?php
include 'hospital_data.php';
// $reserve_list = $hospitalObj->get_reservations();
$date = $_GET['date'];

if (empty($reservation_date = $hospitalObj->get_reservations($date))) {
    echo "3 more sits available";
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

    </head>

    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    reserve a lesson
                </div>
                <div class="card-body">
                    <form action="hospital_data.php" method="post">
                        Choosen Date: <br>
                        <input type="text" name="r_date" value="<?php echo $date ?>" id="" class="form-control">
                        <br>
                        <input type="text" name="username" id="" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary" name="reserve">Reserve</button>
                    </form>

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



    <?php


} else {

    if (count($reservation_date) >= 3) {
        echo "Reservation count: " . count($reservation_date);
        echo "<br>";
        echo "this date is full";
    } else {
        echo "Reservation count: " . count($reservation_date);
        echo "<br>";
    ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <div class="alert alert-success"> <?php echo (3 - count($reservation_date)) . " more seat is available for our customers" ?></div>
        <!doctype html>
        <html lang="en">

        <head>
            <title>Title</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->

        </head>

        <body>
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header">
                        reserve a lesson
                    </div>
                    <div class="card-body">
                        <form action="hospital_data.php" method="post">
                            Choosen Date: <br>
                            <input type="text" name="r_date" value="<?php echo $date ?>" id="" class="form-control">
                            <br>
                            <input type="text" name="username" id="" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-primary" name="reserve">Reserve</button>
                        </form>

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



<?php



    }
}


?>