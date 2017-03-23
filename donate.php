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


    <form class="js-form" role="form" id="donate_form" action = "connect.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <?php include'validate.php';?>
                <h2>Donate Blood</h2>
                <div class="form-group clearfix">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="name" placeholder="Full Name" class="form-control" autofocus required>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                        <span class="error"> <?php echo $nameErr;?></span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                        <span class="error"> <?php echo $emailErr;?></span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="age" class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-9">
                        <input type="number" id="age" name="age" class="form-control"required>
                        <span class="error"> <?php echo $ageErr;?></span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="bgrp" class="col-sm-3 control-label">Blood Group</label>
                    <div class="col-sm-9">
                        <select id="bgrp"  name="blood_grp" class="form-control" required>
                          <option value="A+VE">A +ve</option>
                          <option value="B+VE">B +ve</option>
                          <option value="O+VE">O +ve</option>
                          <option value="AB+VE">AB +ve</option>
                          <option value="A-VE">A -ve</option>
                          <option value="B-VE">B -ve</option>
                          <option value="O-VE">O -ve</option>
                          <option value="AB-VE">AB -ve</option>
                        </select>
                        <span class="error"> <?php echo $blood_grpErr;?></span>
                    </div>
                </div> <!-- /.form-group -->
                <!-- <div class="form-group clearfix">
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
                    <label for="gender" class="col-sm-3 control-label">gender</label>
                    <div class="col-sm-9">
                        <select id="gender"  name="gender" class="form-control" required>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                        <span class="error"> <?php echo $genderErr;?></span>
                    </div>
                  </div>
                  <!--/.form-group -->
                <div class="form-group clearfix">
                    <label for="mNo" class="col-sm-3 control-label">Mobile Number</label>
                    <div class="col-sm-9">
                        <input type="number" id="phone_no" placeholder="phone_no" name="phone_no" class="form-control" autofocus required>
                        <span class="help-block">Add country Code Eg: 918123456789</span>
                        <span class="error"> <?php echo $phone_noErr;?></span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="pincode" class="col-sm-3 control-label">Pincode</label>
                    <div class="col-sm-9">
                        <input type="number" id="pincode" placeholder="Pincode" name="pincode" class="form-control" autofocus required>
                        <span class="help-block">Enter your pincode</span>
                        <span class="error"> <?php echo $pincodeErr;?></span>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required>I hereby accept all the <a href="#">terms and conditions.</a>
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
