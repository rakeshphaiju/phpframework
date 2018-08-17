<?php require 'header.php' ?>
<br>
<br>
<br>
<div class="container" align="center">
 
<form action="<?php echo base_url('index.php/main/booked');?>" method="POST" style="background-color:  #EDF5F5; width: 60%;">
<h4>Personal info:</h4>
	<div class="form-group" >
	  <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="fn" value="" required="">
        <label for="usr">Address:</label>
      <input type="text" class="form-control" id="usr" name="ad" value="" required="">
      <label for="usr">Contact number</label>
      <input type="tel" class="form-control" id="usr" name="cn" value="" required="">
      <label for="usr">Age</label>
      <input type="number" min="12" class="form-control" id="usr" name="age" value="" required="">
		</div>
		<h4>Booking info:</h4>
		<div class="form-group">
	  <label for="usr">Pick-Up-Date</label>
      <input type="date" class="form-control" id="usr" name="pud" value="">

	  <label for="usr">Drop-off-Date</label>
      <input type="date" class="form-control" id="usr" name="dod" value="">
      </div>
      <button class="btn btn-info" name="add">Submit</button>
      <button class="btn btn-info"><a href="<?php echo base_url('index.php');?>" style="a:link{text-decoration: none;}">Cancel Booking</a></button>

</form>

</div>
<?php require 'footer.php' ?>