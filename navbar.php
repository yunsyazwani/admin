<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>

    <nav class="bg-dark white-text sidebar" id="sidebar">
      <div class="sidebar-sticky">
      	<a class="navbar-brand bg-dark white-text col-sm-3 col-md-2 mr-0" href=""><img src="dist/img/logo.png" alt="Logo" width="40" height="40" class="brand-image img-circle elevation-3" style="opacity: .8"> Company name</a>
		<ul class="nav flex-column nav-pills" id="" role="tablist" aria-orientation="vertical" style="border-top: #8a8a8a solid 1px;">
			<li class="nav-item">
		      <a href="index.php" class="nav-link <?php if ($current_page == "index.php"){ echo "active "; }?>" id="" role="tab">
		      <i class="fas fa-tachometer-alt fa-fw"></i> Dashboard</a>
		  	</li>
		  	<li class="nav-item">
		      <a href="location.php" class="nav-link <?php if ($current_page == "location.php"){ echo "active "; }?>" id="" role="tab">
		      <i class="fas fa-map-marker-alt fa-fw"></i> Location</a>
		  	</li>
		  	<li class="nav-item">
		      <a class="nav-link <?php if ($current_page == "file.php" || $current_page == "form_file.php"){ echo "active "; }?>" href="#file" id="" role="tab" data-toggle="collapse">
		      <i class="fas fa-file-alt fa-fw"></i> File <i class="right fa fa-caret-down"></i></a>
		    </li>
		    <div class="collapse submenu" id="file">
		     	<li class="nav-item">
			      	<a href="file.php" class="nav-link <?php if ($current_page == "file.php"){ echo "active2 "; }?>" id="" role="tab">
			      	<i class="fas fa-genderless fa-fw"></i> All Files</a>
			    </li>
		      	<li class="nav-item">
		     		<a href="form_file.php" class="nav-link <?php if ($current_page == "form_file.php"){ echo "active2 "; }?>" id="" role="tab">
		     		<i class="fas fa-genderless fa-fw"></i> Add Files</a>
		    	</li>
		    </div>
		    <li class="nav-item">
		      <a href="department.php" class="nav-link <?php if ($current_page == "department.php"){ echo "active "; }?>" id="" role="tab">
		      <i class="fas fa-building fa-fw"></i> Department</a>
		  	</li>
		</ul>
      </div>
    </nav>




