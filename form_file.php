<!DOCTYPE html>
<html>
  <?php include("head.php"); ?>
    <body>
    	<div class="wrapper">
      		<?php include("navbar.php"); ?>

      		<div id="content">
      			<?php include("top-menu.php"); ?>

      			<!--start content-->
      			<div class="row">
      				<div class="col-md-12 padding-topbottom">
	      				<div class="card">
						  <div class="card-body">
						    <h4>Add File</h4>
						  </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						  <label for="name">File Name</label>
						  <input type="text" class="form-control" id="name" placeholder="">
						</div>
						<div class="form-group">
						  <label for="date">Date</label>
						  <input type="text" class="form-control datepicker" id="date" placeholder="">
						</div>
						<div class="form-group">
						  <label for="file">Upload file</label>
						  <input type="file" class="form-control" id="pdf" placeholder="">
						</div>
						<div class="form-group">
						   <label for="location">Example select</label>
						   <select class="form-control" id="location">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						      <option>5</option>
						   </select>
						 </div>
					</div>
					<div class="col-md-6">
						<div>
						  <button id="prev">Previous</button>
						  <button id="next">Next</button>
						  &nbsp; &nbsp;
						  <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
						</div>
						<canvas id="the-canvas"></canvas>
					</div>
      			</div>

      			
			    <!--end content-->

				<footer class="bg-light">
		      		<label>© Company 2019</label>
		      	</footer>
			</div>
      	</div>

    </body>
  <?php include("footer.php"); ?>
</html>
