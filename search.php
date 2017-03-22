<?php include'header.php';?>
<div class="jumbotron">
      <div class="container">
        <h1>Search Blood</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Search! »</a></p> -->
      </div>
</div>
<div class="container">
<div class="row">
  <div class="col-md-12">

            <h2>Search Blood</h2>

            <div id="map">
            </div>

            <form class="form-horizontal" role="form" action = "conn.php" method ="post">

              <div class="form-group">
                  <label for="bgrp" class="col-sm-3 control-label">Blood Group</label>
                  <div class="col-sm-9">
                      <select id="brgp" class="form-control" name="search1">
                        <option value="AP">A +ve</option>
                        <option value="BP">B +ve</option>
                        <option value="OP">O +ve</option>
                        <option value="ABP">AB +ve</option>
                        <option value="AN">A -ve</option>
                        <option value="BN">B -ve</option>
                        <option value="ON">O -ve</option>
                        <option value="ABN">AB -ve</option>
                      </select>
                  </div>
                </div>
                  <div class="form-group search_pincode_div">
                      <label for="pincode" class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-9">
                          <input type="text" id="pincode_search" placeholder="Pincode" name="search2" class="form-control" autofocus>
                          <span class="help-block">Pincode of the area from where you need blood from</span>
                    </div>
              </div>



     <div class="form-group">
         <div class="col-sm-9 col-sm-offset-3">
             <button type="" class="btn btn-primary btn-block search_btn">Search</button>
         </div>
     </div>

              </form>
  </div>



</div>
<?php include'footer.php';?>
