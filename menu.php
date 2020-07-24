<?php 
$page = $_SERVER['PHP_SELF']; 
echo $page;
?>
<header>
		<div class="header_container">
		<div class="menu_button_container">
			<div class="menu-btn">
				<div class="menu-btn__burger"></div>
			</div>
		</div>
		<div class="nav_and_logo_container">
			<div class="hidden_logo_container"><img class="hidden_logo" src="https://i.imgur.com/3MTQzk0.png"></div>
			<ul class="nav_container" id="buttons_container">
				<li class="nav_items nav_buttons" <?php if($page=="/index.php") echo'class="active"'; ?>><a class="button_link" href="#">ACCUEIL</a></li>
				<li class="nav_items nav_buttons" <?php if($page=="/gamme.php") echo'class="active"'; ?>><a class="button_link" href="#">GAMME</a></li>
				<li class="nav_items nav_logo"><img class="logo" src="https://i.imgur.com/3MTQzk0.png"></li>
				<li class="nav_items nav_buttons" <?php if($page=="/devis.php") echo'class="active"'; ?>><a class="button_link" href="#">DEVIS</a></li>
				<li class="nav_items nav_buttons" <?php if($page=="/index.php") echo'class="active"'; ?>><a class="button_link" href="#">CONTACT</a></li>
			</ul>
		</div>
	</div>
	</header>