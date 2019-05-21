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
						  	<a href="" class="btn btn-primary right">Add</a>
						    <h4>Location</h4>
						  </div>
						</div>
					</div>
      			</div>

      			<table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>Name</th>
			                <th>Position</th>
			                <th>Office</th>
			                <th>Age</th>
			                <th>Start date</th>
			                <th>Salary</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>Tiger Nixon</td>
			                <td>System Architect</td>
			                <td>Edinburgh</td>
			                <td>61</td>
			                <td>2011/04/25</td>
			                <td>$320,800</td>
			            </tr>
			            <tr>
			                <td>Garrett Winters</td>
			                <td>Accountant</td>
			                <td>Tokyo</td>
			                <td>63</td>
			                <td>2011/07/25</td>
			                <td>$170,750</td>
			            </tr>
			            <tr>
			                <td>Ashton Cox</td>
			                <td>Junior Technical Author</td>
			                <td>San Francisco</td>
			                <td>66</td>
			                <td>2009/01/12</td>
			                <td>$86,000</td>
			            </tr>
			        </tbody>
			    </table>
			    <!--end content-->

				<footer class="bg-light">
		      		<label>© Company 2019</label>
		      	</footer>
			</div>
      	</div>

    </body>
  <?php include("footer.php"); ?>
</html>
