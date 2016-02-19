<div class="container" style="text-align:center">
<br>
<br>

<?php echo form_open('pages/create',array('class'=>'form','role'=>'form')) ?>
<?php echo validation_errors(); ?>
  <div class="form-group row">
   <div class="col-sm-4">
	</div>
    <div class="col-sm-4">
		<input type="text" class="form-control" name="college" placeholder="Enter College Name">
    </div>
	<div class="col-sm-4"></div>
  </div>
	
  <div class="form-group row">
   <div class="col-sm-4">
	</div>
    <div class="col-sm-4">
		<input type="text" class="form-control" name="emailid" placeholder="Enter Email Id">
    </div>
	<div class="col-sm-4"></div>
  </div>
  
  
  <div class="form-group row">
   <div class="col-sm-4"></div>
    <div class="col-sm-4">
		<input type="text" class="form-control" name="mobileno" placeholder="Enter Moblie No">
    </div>
	<div class="col-sm-4"></div>
  </div>
  
  <div class="form-group row">
   <div class="col-sm-4"></div>
    <div class="col-sm-4">
     <br>
        <button type="submit" class="btn btn-danger-outline">Sign Up</button></span>
    </div>
	<div class="col-sm-4"></div>
  </div>
  
</form>
</div>
