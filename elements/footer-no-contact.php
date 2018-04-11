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


			$(window).bind('scroll', function () {
			    if ($(window).scrollTop() > 12) {
			        navbar.classList.add("sticky")
			    } else {
			        navbar.classList.remove('sticky');
			    }
			});
			

			// $(document).ready(function(){
		 //    var i = document.location.href.lastIndexOf("/");
		 //    var currentPHP = document.location.href.substr(i+1);
		 //    $(".nav a").removeClass('active');
		 //    $(".nav a[href^='"+currentPHP+"']").addClass('active');
		 //  });

		  var header = document.getElementsByClassName("nav");
		  var link = document.getElementsByClassName("nav-link");
		  for (var i = 0; i < link.length; i++) {
		    link[i].addEventListener("click", function() {
		      var current = document.getElementsByClassName("active");
		      current[0].className = current[0].className.replace(" active", "");
		      this.className += " active";
		    });
		  }

		</script>

	</body>
</html>