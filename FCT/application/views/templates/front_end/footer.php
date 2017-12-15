	<footer class="container-fluid text-center" id="footer-text">
		<p>FP Conecta -  Elaborado por: Geyse Kelli Canquerino Rege</p>
	</footer>
	
	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

	<script type="text/javascript">
	//javascript para poder fijar el footer al pie de página
	$(document).ready(function () {
	    $(window).load(function(){

	        function fixFooter(){
	            var windowHeight = $(window).height();
	            var bodyHeight = $('body').height();
	            var footerBottom = $('#footer-text').position().top + $('#footer-text').outerHeight(true);

	            if(footerBottom < windowHeight){
	                $('#footer-text').css("position", "absolute");
	                $('#footer-text').css("left", 0);
	                $('#footer-text').css("right", 0);
	                $('#footer-text').css("bottom", 0); 
	            }
	        }
	        fixFooter();

	        $(window).resize(function(){
	            fixFooter();
	        });

	    });
	});
    </script>

</body>
</html>