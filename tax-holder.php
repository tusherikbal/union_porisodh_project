<?php
  include 'inc/header.php'
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
        
        
    
     <div class="container thismargin">

        <div class="text-center py-5 ">
        <h1><u>Tax Holder/ Home Owner Details</u></h1>
        <p>গ্রাহক হিসেবে আপনার সকল ইনফরমেশন এখানে দেখতে পাবেন এবং নিচে থাকা মেসেজ অপশন থেকে অথরিটির কাছে মেসেজ দিতে পারবেন। </p>
         </div>

         <div class="row"> 
                
                <div class="d-flex col-md-4  p-3">
                    <div class=" ">
                    <h4>Your Previous Tax information</h4>
                    <small class="text-muted">এখানে সিলেক্ট করে আপনার বিগত বছরের তথ্য গুলো দেখতে পাবেন </small>
                  <div class="py-3 col-sm-12">
                  <select name="" id="" class="form-select">
                      <option value="">2023</option>
                      <option value="">2022</option>
                      <option value="">2021</option>
                  </select>
                    <h6>Selected Year tax info</h6>
                  <table class="table table-hover table-bordered">
                    <tr>
                      <th scope="col">Years</th>
                      <td scope="col">2022</td>
                    </tr>
                    <tr>
                      <th scope="col">tax amount</th>
                      <td scope="col">250/-</td>
                    </tr>
                    <tr>
                      <th scope="col">Total paid tax</th>
                      <td scope="col">3150/-</td>
                    </tr>
                  </table>

              </div>
            </div>
</div>

                  <div class="col-md-8">
                  <div class=" ">
                    <div class="text-center">
                    <h3>information</h3></div>
                      
                    <div class="px-3">
                      
                      <table class="table table-hover table-bordered">
                          <tr>
                            <th scope="col">Years</th>
                            <td scope="col">2022</td>
                          </tr>
                          <tr>
                            <th scope="col">Holding Number</th>
                            <td scope="col">2022</td>
                          </tr>
                          <tr>
                            <th scope="col">Holder Name</th>
                            <td scope="col">2022</td>
                          </tr>
                          <tr>
                            <th scope="col">Home Type</th>
                            <td scope="col">2022</td>
                          </tr>
                          <tr>
                            <th scope="col">Address</th>
                             <td>home: haji bari, village:kalikapur, word:11.  </td>
                          </tr>
                          <tr>
                            <th scope="col">Tax Amount</th>
                            <td scope="col">250/-</td>
                          </tr>
                      </table>
                    </div>



                    <div class="row text-center thismargin px-5">
                      
                      
      
                            <div class="form-floating">
                            <h3>Send Message to Admin</h3>
                            <p>write your Message and send to Authority</p>
                              <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                              
                            </div>
                            <div class="py-3">
                              <a href="#" class="btn btn-primary">send Message</a>
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





















<?php
  include 'inc/footer.php'
?>