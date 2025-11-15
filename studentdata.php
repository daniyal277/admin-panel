<?php 

include("conn.php");


include("components/header.php");
include("components/topbar.php");
include("components/sidebar.php");



?>






      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
           
             
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              
              <!-- /.col -->
              <div class="col-md-12">
                
                <!-- /.card -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Students Record</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th >ID</th>
                          <th>Name</th>
                          <th>Age</th>
                          <th >Gender</th>
                          <th >City</th>
                          <th >Edit</th>
                          <th >Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sql = "SELECT * FROM student INNER JOIN city ON student.city_id=city.cityid";
                        $query = mysqli_query($conn, $sql); 
                        while ($row = mysqli_fetch_assoc($query)) {
                          
                        
                        
                        ?>
                        <tr class="align-middle">
                          <td><?= $row['id']?></td>
                          <td><?= $row['name']?></td>
                          <td><?= $row['age']?></td>
                          <td><?= $row['gender']?></td>
                          <td><?= $row['cityname']?></td>
                          <td><a href="editform.php?updid=<?= $row['id']?>" class="btn btn-success"> Edit</a></td>
                          <td><a href="" class="btn btn-danger"> Delete</a></td>
                         
                        </tr>
                      <?php 
                      }
                      
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->


























<?php 
include("components/footer.php");




?>