<?php include'header.php';?>
<div class="jumbotron">
      <div class="container">
        <h1>Donate Blood</h1>
        <p>Tears of a mother can not save her child. But YOUR BLOOD CAN!. C'mon, we know you have got it in you. Donate Blood! Save Lives!</p>
      </div>
</div>
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2">


    <form class="js-form" role="form" id="donate_form">
                <h2>Donate Blood</h2>
                <div class="form-group clearfix">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="name" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="age" class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-9">
                        <input type="number" id="age" name="age" class="form-control">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="bgrp" class="col-sm-3 control-label">Blood Group</label>
                    <div class="col-sm-9">
                        <select id="bgrp" class="form-control">
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
                </div> <!-- /.form-group -->
                <div class="form-group clearfix">
                    <label for="gender" class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="gender" type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="gender" type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>

                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group clearfix">
                    <label for="mNo" class="col-sm-3 control-label">Mobile Number</label>
                    <div class="col-sm-9">
                        <input type="number" id="mNo" placeholder="Mobile Number" class="form-control" autofocus>
                        <span class="help-block">Add country Code Eg: 918123456789</span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="pincode" class="col-sm-3 control-label">Pincode</label>
                    <div class="col-sm-9">
                        <input type="number" id="pincode" placeholder="Pincode" class="form-control" autofocus>
                        <span class="help-block">Enter your pincode</span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I hereby accept all the <a href="#">terms and conditions.</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group clearfix">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->



   </div>
</div>




<?php include'footer.php';?>
