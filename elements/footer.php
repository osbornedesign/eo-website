	  <footer class="full-width">
	  	<div class="body-container p-16">
		  	<h4>Contact:
		  		<a href="mailto:ericosbornedesign@gmail.com?Subject=Hello!"> ericosbornedesign@gmail.com</a>
		  	</h4>
		  </div>
	  </footer>
	</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="js/vendors/jquery-slim.min.js"><\/script>')</script>
	    <script>
	    	$(function() {
	    	    $('body').removeClass('fade-out');
	    });
	</script>

	<script>
	window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	// function myFunction() {
	//   if (window.pageYOffset >= sticky) {
	//     navbar.classList.add("sticky")
	//   } else {
	//     navbar.classList.remove("sticky");
	//   }
	// }

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > 12) {
	        navbar.classList.add("sticky")
	    } else {
	        navbar.classList.remove('sticky');
	    }
	});
	</script>

	</body>
</html>