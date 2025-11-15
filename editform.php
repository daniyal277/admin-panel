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
      
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              
              <!--end::Col-->
              <!--begin::Col-->
            
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-12">
                <!--begin::Different Height-->
              
                <!--end::Different Height-->
            
                <!--end::Different Width-->
                <!--begin::Form Validation-->
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Student Form</div></div>
                  <!--end::Header-->
  <?php 
  
  $getid = $_GET["updid"];//4
//   echo $getid;
$sql = "SELECT * FROM student WHERE id= '$getid'";       
  
$query = mysqli_query($conn,$sql);  

while ($row = mysqli_fetch_assoc($query)) {
   

  
  ?>


                  <!--begin::Form-->
      <form class="needs-validation" novalidate method="post" action="<?= $_SERVER['PHP_SELF']?>">
                    <!--begin::Body-->
                    <div class="card-body">
                      <!--begin::Row-->
                      <div class="row g-3">
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">Name</label>
                          <input type="hidden" name="id" value="<?= $row['id']?>">
                          <input
                            type="text"
                            class="form-control"
                          name="nm"
                           value="<?= $row['name']?>"
                            required
                          />
                       
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Age</label>
                          <input
                            type="number"
                            class="form-control"
                            name="ag"
                           value="<?= $row['age']?>"
                            required
                          />
                        
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                       
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">Gender</label>
                          <input
                            type="text"
                            class="form-control"
                         name="gn"
                         value="<?= $row['gender']?>"
                            required
                          />
                          
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">City</label>
                 <?php           
                          
                        echo "<select class='form-select' id='validationCustom04' required name='ct'>";
                         echo   "<option selected disabled value=''>Select City</option>";
       
                 $sql1 ="SELECT * FROM city";
              $query1 = mysqli_query($conn,$sql1);
                     while ($row1 = mysqli_fetch_assoc($query1)) {
                //4               //  4
          if ($row1["cityid"] == $row["city_id"]) {
         
            $select = "selected";

        
                          echo  "<option {$select} value='{$row1['cityid']}'>{$row1['cityname']}</option>";
 }
                           else {
            $select = "";
          }
                        
                     }
                         ?>
                          </select>
                        </div>
                        <!--end::Col-->
                 
                      
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit" name="update">Update form</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <?php 
                  
                  }
                  
                  ?>
                  <!--end::Form-->
                  <!--begin::JavaScript-->
                  <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (() => {
                      'use strict';

                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      const forms = document.querySelectorAll('.needs-validation');

                      // Loop over them and prevent submission
                      Array.from(forms).forEach((form) => {
                        form.addEventListener(
                          'submit',
                          (event) => {
                            if (!form.checkValidity()) {
                              event.preventDefault();
                              event.stopPropagation();
                            }

                            form.classList.add('was-validated');
                          },
                          false,
                        );
                      });
                    })();
                  </script>
                  <!--end::JavaScript-->
                </div>
                <!--end::Form Validation-->
              </div>
              <!--end::Col-->
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