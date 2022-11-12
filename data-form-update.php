<?php include 'inc/header.php'; ?>
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
        
              
<div class="thismargin px-3">

                

<div class="row">
  <div class="col-md-6">

  <h3 class="text-center py-2">Update Holder Information</h3>
          
    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Word No.</label>
          <input type="number" class="form-control" id="w-no">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Holding number</label>
          <input type="number" class="form-control" id="holding-numb">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Name</label>
            <input type="text" class="form-control" id="h-name">
          </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Fathers Name</label>
            <input type="text" class="form-control" id="f-name">
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


        <div class="col-md-6">
            <label for="inputCity" class="form-label">Khanar Dhoron</label>
            <select id="inputState" class="form-select">
                <option selected disabled>Select khanar dhoron</option>
                <option>building</option>
                <option>building</option>
                <option>building</option>
              </select>
          </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Dharjo krito tax</label>
            <input type="number" placeholder="240/-" class="form-control" id="f-name">
          </div>



        <h6>Family Members:</h6>
        <div class="col-md-3">
            <select id="inputState" class="form-select">
              <option selected>Male</option>
              <option>...</option>
            </select>
          </div>
        <div class="col-md-3">
            <select id="inputState" class="form-select">
              <option selected>FeMale</option>
              <option>...</option>
            </select>
          </div>
        <div class="col-md-3">
            <select id="inputState" class="form-select">
              <option selected>chele</option>
              <option>...</option>
            </select>
          </div>
        <div class="col-md-3">
            <select id="inputState" class="form-select">
              <option selected>Meye</option>
              <option>...</option>
            </select>
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























<?php include 'inc/footer.php'; ?>