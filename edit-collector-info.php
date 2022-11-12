<?php 
  include 'inc/header.php';
?>
    
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

                <div class="row">
                    <div class="col-md-8 col-sm-12">
                    

                    <div class="container">
                      <h3>Edit Collector info</h3>
                              
                        <form class="row g-3">
                            
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Name</label>
                                <input type="text" class="form-control" id="h-name">
                              </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Fathers Name</label>
                                <input type="text" class="form-control" id="f-name">
                              </div>

                              <div class="col-md-12">
                                <label for="inputCity" class="form-label"> Phone Number</label>
                                <input type="number" class="form-control" name="collector_phone" id="" placeholder="Your Phone number">
                              </div>

                              <div class="col-md-12">
                                <label for="inputCity" class="form-label"> Your user name</label>
                                <input type="text" class="form-control" name="collector_phone" id="" placeholder="username">
                              </div>

                              <div class="col-md-12">
                                <label for="inputCity" class="form-label"> Your password</label>
                                <input type="password" class="form-control" name="collector_phone" id="" placeholder="your password">
                              </div>

                              <h6>Your Address:</h6>
                            <div class="col-md-4">
                              
                              <input type="text" placeholder="Home:" class="form-control" id="homename">
                            </div>
                            <div class="col-md-4">
                             
                              <input type="text" placeholder="Village" class="form-control" id="homename">
                            </div>
                            <div class="col-md-4">
                              
                              <input type="text" placeholder="Union" class="form-control" id="homename">
                            </div>
                            
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                          </form>
                    
                    
</div>
                            </div>
                </div>
              </div>
              </div>
             </div>
        </div>  
    </div>




</div>



















<?php 
  include 'inc/footer.php';
?>