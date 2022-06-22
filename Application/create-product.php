<?php
require_once('getdata.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label>Product Name: </label>
                <input type="text" class="form-control" name="p-name" required>
            </div>
            <div class="form-group">
                <label>Brand :</label>
                <select name="brand" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($brands as $brand) {
                        echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Ranges :</label>
                <select name="ranges" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($ranges as $range) {
                        echo '<option value="' . $range['id'] . '">' . $range['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Transmissions :</label>
                <select name="transmissions" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($transmissions as $transmission) {
                        echo '<option value="' . $transmission['id'] . '">' . $transmission['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fuels :</label>
                <select name="fuels" class="form-control" required>
                    <option value="">--Select--</option>

                    <?php
                    foreach ($fuels as $fuel) {
                        echo '<option value="' . $fuel['id'] . '">' . $fuel['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="stt">
                <label for="">Status :</label><br>
                <label for="male">Old Car</label>
                <input type="radio" name="status" value="1">
                <label for="male">New Car</label>
                <input type="radio" name="status" value="0">
            </div>
            <div class="form-group">
                <label>Price :</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>Add Image :</label>
            </div>
            <div class="form-group">
                <label for="">Description :</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" style="resize: none; height: 200px"> 

                </textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

</body>

</html>