<?php require 'header.php' ?>
<div class="image">
<img src="<?php echo base_url('image/car-rental.jpg'); ?>" style="width: 100%; " alt="">
      <h2><b>Vehicle Hire- Choose, Hire and Enjoy</b></h2><br>
      <div class="form">
      	<h3><b>Search for Vehicle Hire:</b></h3>
      	<form action="<?php echo base_url('index.php/main/search_result');?>" method ="post">
      		<div class="form-group">
      	 <h4>Select vehicle:
		<select name="post" class="form-control">
		    <?php foreach($posts as $post){ ?>

     <option value="<?php echo $post->Vehicle_Id; ?>"><?php echo $post->Vehicle; ?></option>
    <?php } ?>
      </select>	
      <br>
     I want it for <input type="number" name="days" min="1" required=""> days.    
      </h4>  	
     <button type="submit" name="Search" class="btn btn-info">
        Search
        </button>
      	</div>

      	</form>
      </div>
 <div id="result" style="
  position: absolute;
  float: right;
  top: 275px;
  left: 50%;
  right: : 20px;
  height: 52%;
  width: 40%;
  background-color:#00FF7F;">
  <h3><b>Our offer:</b></h3>
     <h4> <?php 
      $day= $_POST["days"]; 
      $price= $post->Price_per_day; ?>
     €<?php
      echo $day * $price ;
      ?> </h4>
      <form action="<?php echo base_url('index.php/main/book_vehicle');?>">
        <button type="submit" name="Search" class="btn btn-info">
        Book
        </button>
      </form>
      </div>


</div>

<?php require 'footer.php' ?>