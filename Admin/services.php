<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<?php include '../db.php';?>

<?php
    error_reporting(1);
    $service_id = 0;
     $editdata_all = mysqli_fetch_assoc(mysqli_query($con,"SELECT * From services limit 1"));
       
    if(isset($_GET['edit_id']))
    {
        $editdata = mysqli_fetch_assoc(mysqli_query($con,"SELECT * From services WHERE id = '".$_GET['edit_id']."'"));
        $service_id = $_GET['edit_id'];
    }

    if(isset($_POST['submit']))
    {   
        $id = $_POST['id'];
        $service_name = $_POST['service_name'];
        $service_description = $_POST['service_description'];
        $service_parent_id = !empty($_POST['service_parent_id']) ? $_POST['service_parent_id'] : 0;
        
        // $oldData = mysqli_fetch_assoc(mysqli_query($con,"SELECT id From services WHERE id !='$id' AND page_type='$page_type'"));
        
        // if(!empty($oldData))
        // {
        //     echo
        //     '<script>
        //         alert("'.ucwords($page_type).' Already Added.");
        //         window.location="banner.php";
        //     </script>';
        //     die;
        // }
        
        $service_description = str_replace("'","",$service_description);
       
        if($id > 0)
        {
            $service_image = $editdata['service_image'];
            if(!empty($_FILES["service_image"]['name']))
            {
                if(!empty($editdata['service_image']) && file_exists("../images/service/".$editdata['service_image']))
                {
                    unlink("../images/service/".$editdata['service_image']);
                }
                
                $service_image = $_FILES["service_image"]['name'];
                move_uploaded_file($_FILES["service_image"]["tmp_name"],"../images/service/$service_image");
            }
            mysqli_query($con,"UPDATE services SET get_quote = '$get_quote',service_name = '$service_name',service_description = '$service_description',service_image = '$service_image',service_parent_id = '$service_parent_id' WHERE id = '$id'");
        }
        else
        {
            $service_image = $_FILES["service_image"]['name'];
            move_uploaded_file($_FILES["service_image"]["tmp_name"],"../images/service/$service_image");
           
            mysqli_query($con,"INSERT INTO services SET get_quote = '$get_quote',service_name = '$service_name',service_description = '$service_description',service_image = '$service_image',service_parent_id = '$service_parent_id'");    
        }
        
        echo '<script>
            alert("1 Row updated....");
            window.location="services.php";
        </script>';
    }
    
    if(isset($_GET['delete_id']))
    {
        
        $data = mysqli_fetch_assoc(mysqli_query($con,"SELECT image From services WHERE id = '".$_GET['delete_id']."'"));
        
        if(!empty($data['service_image']) && file_exists("../images/service/".$data['service_image']))
        {
            unlink("../images/service/".$data['image']);
        }
        mysqli_query($con,"DELETE FROM services WHERE id = '".$_GET['delete_id']."'");
        
        echo '<script>
            alert("1 Row Deleted....");
            window.location="services.php";
        </script>';
        
    }
    
?>
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-bottom: 10px;
  margin-top: 13px;
 MARGIN-LEFT: 15px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

label {
    display: inline-block;
    font-size: 19px;
}
</style>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Banner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Recent Sales -->
            <div class="col-5">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Services Form</h5>

                  <form method="post" enctype="multipart/form-data">
                      <input class="form-control form-control-lg" type="hidden" name="id" value="<?= $service_id?>">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Service name</label>
                        <input class="form-control" type="text" name="service_name" value="<?= ($service_id > 0) ? $editdata['service_name'] : '';?>">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Service Description</label>
                        <textarea class="form-control" name="service_description"  rows="5"><?= $editdata['service_description'] ?></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Service parent</label>
                        <select class="form-control" name="service_parent_id" >
                            <option selected value="">Select</option>
                            <?php
                                $ServiceData = mysqli_query($con,"SELECT id,service_name From services WHERE service_parent_id ='0'");
                                
                                while($row = mysqli_fetch_assoc($ServiceData))
                                {  
                                    $Selected = ($service_id>0 && $editdata['service_parent_id'] == $row['id']) ? 'selected' : '';
                                    
                                    echo'<option '.$Selected.' value="'.$row['id'].'">'.$row['service_name'].'</option>';
                                }
                            ?>
                          
                          
                        </select>
                      </div>
                        <div class="form-group pt-3 pb-3">
                          <label for="formFileLg" class="form-label">Service Image</label>
                          <input class="form-control form-control-lg" name="service_image" type="file" <?= ($service_id>0) ? '' : 'required'?> >
                          <?php
                          if($service_id>0)
                          {
                              echo
                              '<img src="../images/service/'.$editdata['service_image'].'" height="150">';
                          }
                          ?>
                        </div>

                      
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

              </div>
              
              <hr>
                       <form action="update_get_quote.php" method="POST">
                             <div>
                               <label>Get Quote</label>
                              <label class="switch">
                                <input type="checkbox" name="get_quote" <?php if($editdata_all['get_quote']=='yes') { echo 'checked'; } ?>>
                                   <span class="slider round"></span>
                                     </label>
                                    </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  
      
                    </form>
           
            </div><!-- End Recent Sales -->
            <div class="col-7">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Banners</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Service Image</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $bannedata = mysqli_query($con,"SELECT * FROM services WHERE 1=1");
                        
                        while($row = mysqli_fetch_assoc($bannedata))
                        { 
                          echo  '<tr>
                                    <td>
                                        <a href="services.php?edit_id='.$row['id'].'"><i class="bi-pencil-square"></i></a>&nbsp;|&nbsp;
                                        <a href="services.php?delete_id='.$row['id'].'" onclick="return confirm('."'Are you sure for remove this...??'".');"><i class="bi-trash-fill text-danger"></i></a>
                                    </td>
                                    <td>'.$row['service_name'].'</td>
                                    <td><img src="../images/service/'.$row['service_image'].'" height=150></td>
                                    
                                  </tr>';
                        } ?>
                        
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

 <?php include 'footer.php';?>