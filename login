<?php
$servername = "localhost";
$username  = "solicitous_clearbyservices";
$password = "Solicitous@123";
$dbname= "solicitous_clearbyservices";
  
$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){

    ?>
    <script>
        // alert ('Connection Successful');
    </script>

    <?php
}else{
    die ("no connection" . mysqli_connect_error());
}

?>