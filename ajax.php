
<?php
    $conn =  mysqli_connect('localhost', 'root','','country_state_city');

 if (isset($_POST['id'])) { // country_id

                    # code...

                    $id=$_POST['id'];

                    $query=mysqli_query($conn,"select * from state where country_id='$id'");

                    while ($row=mysqli_fetch_array($query)) {

                        # code...

                        $id=$row['id'];         // php = sql

                        $state=$row['state']; //

                        echo "<option value='$id'>$state</option>";

                    }




                }





                if (isset($_POST['stateId'])) { // country_id

                    # code...

                    $id=$_POST['stateId'];

                    $query=mysqli_query($conn,"select * from city where state_id='$id'");

                    while ($row=mysqli_fetch_array($query)) {

                        # code...

                        $id=$row['id'];

                        $city=$row['city'];

                        echo "<option value='$id'>$city</option>";

                    }




                }

               

?>
