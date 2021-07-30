
<footer>
    <div class="copyright">
        <ul>
            <li>Copyright <?php echo date("Y") ;?></li>
            <li>All Rights Reserved</li>
            <li><a href="">Terms of Use</a></li>
            <li><a href="">Kelly with WordPress</a></li>        
        </ul>  
    </div>
    <!-- closes copyright div  -->
    </footer>

  
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>

<?php wp_footer(); ?>

</body>
</html>