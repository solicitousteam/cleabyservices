<?php include 'header.php';?>
<?php include 'sidebar.php';?>

  <style>
  h2{
    font-size: 35px;
    text-align: center;
   
  }
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  border:2px solid #fff;
  min-width: 150px;
}
th{
  background-color: grey;
  color: #fff;
  font-size: 20px;

}
table{

}
tr:nth-child(even){background-color: #f2f2f2;}
</style>

    <main id="main" class="main01">
      <div class="">
        <div class="card-header">
          <h4>Contact Records</h4>
        </div>

        <div class="card-body">
     

          <table style="overflow-x:auto;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Subject</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
          <?php
         $con = mysqli_connect("localhost","solicitous_clearbyservices","Solicitous@123","solicitous_clearbyservices");
            
            $query = "SELECT * FROM contact";
            $query_run = mysqli_query($con,$query);

          
            if(mysqli_num_rows($query_run) > 0)
            {
              foreach($query_run as $row)
              {
                // echo $row;
                ?>
              <tr>
             <td><?= $row["id"];?></td>
             <td><?= $row["name"];?></td>
             <td><?= $row["email"];?></td>
             <td><?= $row["phone"];?></td>
             <td><?= $row["subject"];?></td>
             <td><?= $row["message"];?></td>

              </tr>
                <?php 
              }
            }
            else
            {
              echo "No Result Found";
            }
                ?>
          </tbody>
          </table>
      </div>
      </div>
      </main>
  
 <?php include 'footer.php';?>