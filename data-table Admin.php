<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body>    
  <header>
    
  <nav class="navbar bg-light fixed-top">
    <div class="container">
      <div class="d-flex ">
      <h3>Your Tax Collcetion</h3>
    </div>
    <div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button></div>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Select Your Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">LogIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
        
</header>
        
        
              <div class="thismargin px-5">

                <div class="d-flexd">
                    <div class="h3 text-center">Data Table for Admin
                    </div>
                    <div>
                            <table class="table table-hover table-bordered">
                                <tr class="">
                                  <th scope="col">Word No.</th>
                                  <th scope="col">Holding Number</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Fathers Name</th>
                                  <th scope="col">Address</th>
                                  <th scope="col">Mobile</th>
                                  <th scope="col">Khanar Dhoron</th>
                                  
                                  <th scope="col">Tax Dharjo</th>
                                  <th scope="col">Action</th>
                                  </tr>

                                  <td scope="col">01</td>
                                  <td scope="col">21 </td>
                                  <td scope="col">Shaid Ullah</td>                                     
                                  <td scope="col">Abdul Hakim/-</td>                                
                                  <td scope="col">Hajibari, Kalikapur/-</td>
                                  <td scope="col">0123456789/-</td>   
                                  <td scope="col">1 tola building</td>
                                  <td scope="col">3150/-</td>
                                  <td class="">
                                         
                                    

                                        <button type="button" class="btn btn-danger btn-sm">View All info</button>
                                        <button type="button" class="btn btn-info btn-sm">Edit info</button>

                                        <button type="button" class="btn btn-warning btn-sm" onclick="alert()">confirm Payment</button>
                                  </td>
                                </tr>
                              </table>          
                    </div>
                </div>
              </div>
              </div>
             </div>
        </div>  
    </div>




</div>




















<!-- <script>
    // The function below will start the confirmation dialog
    function confirmAction() {
      let confirmAction = confirm("Are you sure to execute this action?");
      if (confirmAction) {
        alert("Action successfully executed");
      }
    }
  </script>
 -->


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/69808657e2.js" crossorigin="anonymous"></script>
</body>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-5">

   
    
        <!-- Left -->
        
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom " style="background-color: rgba(134, 94, 94, 0.05);>
            <!-- Left -->
            <div class=" ">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
        
            <!-- Right -->
            <div>
              <a href="" class="me-4 text-reset">
                <i class=""></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
    
  

  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://devtodigital.com/">Dev To Digital</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    
</html>