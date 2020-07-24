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
				<li class="nav_items nav_buttons"><a class="button_link" href="#">ACCUEIL</a></li>
				<li class="nav_items nav_buttons"><a class="button_link" href="#">GAMME</a></li>
				<li class="nav_items nav_logo"><img class="logo" src="https://i.imgur.com/3MTQzk0.png"></li>
				<li class="nav_items nav_buttons"><a class="button_link" href="#">DEVIS</a></li>
				<li class="nav_items nav_buttons"><a class="button_link" href="#">CONTACT</a></li>
			</ul>
		</div>
	</div>
	</header>
	<script>
	// Get the container element
var btnContainer = document.getElementById("nav_buttons");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("button_link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
} 
</script>