<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<?php include '../db.php';?>

<?php
    error_reporting(1);
    $banner_id = 0;
    if(isset($_GET['edit_id']))
    {
        $editdata = mysqli_fetch_assoc(mysqli_query($con,"SELECT * From banner WHERE id = '".$_GET['edit_id']."'"));
        $banner_id = $_GET['edit_id'];
    }

    if(isset($_POST['submit']))
    {   
        $id = $_POST['id'];
        $page_type = $_POST['page_type'];
        
        $oldData = mysqli_fetch_assoc(mysqli_query($con,"SELECT id From banner WHERE id !='$id' AND page_type='$page_type'"));
        
        if(!empty($oldData))
        {
            echo
            '<script>
                alert("'.ucwords($page_type).' Already Added.");
                window.location="banner.php";
            </script>';
            die;
        }
        
        
        if($id > 0)
        {
            $image = $editdata['image'];
            if(!empty($_FILES["image"]['name']))
            {
                if(!empty($editdata['image']) && file_exists("../images/banner/".$editdata['image']))
                {
                    unlink("../images/banner/".$editdata['image']);
                }
                
                $image = $_FILES["image"]['name'];
                move_uploaded_file($_FILES["image"]["tmp_name"],"../images/banner/$image");
            }
            mysqli_query($con,"UPDATE banner SET page_type = '$page_type',image = '$image' WHERE id = '$id'");
        }
        else
        {
            $image = $_FILES["image"]['name'];
            move_uploaded_file($_FILES["image"]["tmp_name"],"../images/banner/$image");
            mysqli_query($con,"INSERT INTO banner SET page_type = '$page_type',image = '$image'");    
        }
        
        echo '<script>
            alert("1 Row updated....");
            window.location="banner.php";
        </script>';
    }
    
    
    
    if(isset($_GET['delete_id']))
    {
        
        $data = mysqli_fetch_assoc(mysqli_query($con,"SELECT image From banner WHERE id = '".$_GET['delete_id']."'"));
        
        if(!empty($data['image']) && file_exists("../images/banner/".$data['image']))
        {
            unlink("../images/banner/".$data['image']);
        }
        mysqli_query($con,"DELETE FROM banner WHERE id = '".$_GET['delete_id']."'");
        
        echo '<script>
            alert("1 Row Deleted....");
            window.location="banner.php";
        </script>';
        
    }
    
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Banner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Banner</li>
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
                  <h5 class="card-title">Banner Form</h5>

                  <form method="post" enctype="multipart/form-data">
                      <input class="form-control form-control-lg" type="hidden" name="id" value="<?= $banner_id?>">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select class="form-control" name="page_type" required>
                            <option selected value="">Select</option>
                          <option <?= ($banner_id>0 && $editdata['page_type'] == 'home') ? 'selected' : '';?> value="home">Home</option>
                          <option <?= ($banner_id>0 && $editdata['page_type'] == 'about') ? 'selected' : '';?> value="about">About Us</option>
                          <option <?= ($banner_id>0 && $editdata['page_type'] == 'contact') ? 'selected' : '';?> value="contact">Contact Us</option>
                          <option <?= ($banner_id>0 && $editdata['page_type'] == 'service') ? 'selected' : '';?> value="service">Services</option>
                          
                        </select>
                      </div>
                        <div class="form-group pt-3 pb-3">
                          <label for="formFileLg" class="form-label">banner Image</label>
                          <input class="form-control form-control-lg" name="image" type="file" <?= ($banner_id>0) ? '' : 'required'?> >
                          <?php
                          if($banner_id>0)
                          {
                              echo
                              '<img src="../images/banner/'.$editdata['image'].'" height="150">';
                          }
                          ?>
                        </div>
                      
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <div class="col-7">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Banners</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Banner Type</th>
                        <th scope="col">Banner Image</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $bannedata = mysqli_query($con,"SELECT * FROM banner WHERE 1=1");
                        
                        while($row = mysqli_fetch_assoc($bannedata))
                        { 
                          echo  '<tr>
                                    <td>
                                    
                                        <a href="banner.php?edit_id='.$row['id'].'"><i class="bi-pencil-square"></i></a>&nbsp;|&nbsp;
                                        <a href="banner.php?delete_id='.$row['id'].'" onclick="return confirm('."'Are you sure for remove this...??'".');"><i class="bi-trash-fill text-danger"></i></a>
                                    </td>
                                    <td>'.$row['page_type'].'</td>
                                    <td><img style="border:1px solid grey" src="../images/banner/'.$row['image'].'" height=150></td>
                                    
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