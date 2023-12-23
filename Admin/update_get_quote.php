<?php include '../db.php';?>

<?php
  if(isset($_POST['get_quote']))
            {
                $get_quote='yes';
                    mysqli_query($con,"UPDATE services SET get_quote = '$get_quote'");
       
            }
            else{
                $get_quote='no';
                mysqli_query($con,"UPDATE services SET get_quote = '$get_quote'");
       
                
            }
            echo '<script>
            alert("Updated successfully.");
            window.location="services.php";
        </script>';
?>