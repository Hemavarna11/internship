
<?php
    error_reporting(0);

    $reg_no=$_POST['reg_no'];
    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $age=$_POST['age'];
                       
                        
    if (isset($_POST['insert_button'])){
    {header('location:file_uploading/index.php');
        $con=mysqli_connect("localhost","root","","db_issm");
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
                            
        else{
            $sql= "INSERT INTO students (reg_no, first_name, last_name,age) 
                VALUES ('$reg_no', '$first_name', ' $last_name','$age')";
        if (!mysqli_query($con,$sql)) {
                  die('Error: ' . mysqli_error($con));
                }
                                    
                else{
                ?>
                  
    
              <?php
                }
            }
    }
        mysqli_close($con);
?>


<form name="insert" method="post" action="">
  <input type="text" name="reg_no" placeholder="Registration Number" required>
  <br>
  <input type="text" name="first_name" placeholder="Full Name" required>
  <br>
    <input type="text" name="last_name" placeholder="Full Name" required>
    <br>
  <input type="text" name="age" placeholder="Age" required>
  <br>

  <input type="submit" name="insert_button" value="Insert Record" required>
</form>

