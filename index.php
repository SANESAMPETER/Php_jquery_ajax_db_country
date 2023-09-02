<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <!-- bootstrap css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- jquer library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- popper js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

    <!-- bootstrap css 2 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

       <script src="jquery.js"></script>

</head>

<body>

    <div class="container">

        <div class="form-group">

            <label for="country">Select Country:</label>

            <select name="country" class="form-control" id="country">

                <option value="">Select Country</option>

                <?php

                $conn = mysqli_connect('localhost', 'root','','country_state_city');

                $query=mysqli_query($conn,"select * from country");

                while($row=mysqli_fetch_array($query))

                {          

                    ?>

                <option value="<?php echo $row['id']; ?>"><?php echo $row['country']; ?></option>

                <?php

            }

            ?>

            </select>

        </div>




        <div class="form-group">

            <label for="state">Select state:</label>

            <select name="state"  class="form-control" id="state">

                <option value="">Select state</option>

            </select>

        </div>




        <div class="form-group">

            <label for="city">Select city:</label>

            <select name="city"  class="form-control" id="city">

                <option value="">Select city</option>

            </select>

        </div>

    </div>

</body>

</html>
   