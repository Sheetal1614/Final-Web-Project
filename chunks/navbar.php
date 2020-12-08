<section class="fnavbar">
		<div class="navbar-fixed">
		<nav class="blue lighten-1">
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">Safarnama Cafe</a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="/RestroGirls" class="hvr-grow"><strong>Home</strong></a></li>
		        <li><a href="/RestroGirls/about-restro-girls.php" class="hvr-grow"><strong>About Us</strong></a></li>
		        <li><a href="food-categories.php" class="hvr-grow"><strong>Categories</strong></a></li>
		        <li><a href="foods.php" class="hvr-grow"><strong>Foods</strong></a></li>
		        <li><a href="#" class="hvr-grow" onclick="toggleModal('Contact Info', 'You can contact us directly by calling to this number +81-225-314-3456. Check the bottom Footer Section of the website for more info.');"><strong>Contact</strong></a></li>
		        
		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php" class="aves-effect waves-light btn modal-trigger"><strong>Logout</strong></a></li>';
		        	} else {
		        		echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1"><strong>Login</strong></a></li>
		        		<li><a href="#modal1" class="waves-effect waves-light btn modal-trigger" data-target="modal2"><strong>Register</strong></a></li>';
		        	}

		        ?>
		        
		      </ul>
		    </div>
		  </nav>
		</div>

		  <ul class="sidenav" id="mobile-demo">
		    <li><a href="/RestroGirls">Home</a></li>
	        <li><a href="/RestroGirls/about-restro-girls.php">About Us</a></li>
	        <li><a href="food-categories.php">Categories</a></li>
	        <li><a href="foods.php">Foods</a></li>
	        <li><a href="#" onclick="toggleModal('Contact Info', 'You can contact us directly by calling to this number +91-8288935606. Check the bottom Footer Section of the website for more info.');">Contact</a></li>

	        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="modal-trigger" data-target="modal1">Login</a></li>
		        		<li><a href="#" class="modal-trigger" data-target="modal2">Register</a></li>';
		        	}

		        ?>
		  </ul>
	</section>