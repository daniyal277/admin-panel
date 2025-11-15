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
  
  
  if (isset($_POST['insert'])) {
    
    $name = $_POST['nm'];
    $age = $_POST['ag'];
    $gender = $_POST['gn'];
    $city = $_POST['ct'];


    $sql = "INSERT INTO student (name,age,gender,city_id) VALUES ('$name','$age','$gender','$city')";

    $query = mysqli_query($conn,$sql);
    
    
  }
  
  
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
                          <input
                            type="text"
                            class="form-control"
                          name="nm"
                           
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
                            required
                          />
                          
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">City</label>
                          <select class="form-select" id="validationCustom04" required name="ct">
                            <option selected disabled value="">Select City</option>
        <?php 
                 $sql ="SELECT * FROM city";
              $query = mysqli_query($conn,$sql);
                     while ($row = mysqli_fetch_assoc($query)) {

          
        
        
        ?>
                            <option value="<?= $row['cityid']?>"><?= $row['cityname']?></option>

                            <?php 
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
                      <button class="btn btn-info" type="submit" name="insert">Insert form</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                  <!--begin::JavaScript-->
                  <script>
                    // Example starter  for disabling form submissions if there are invalid fields
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