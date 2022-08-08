<footer>
	<div class="copyright">
		<div class="center-wr">
			<div class="clearfix">
				<p>© Copyright <?php echo date('Y');?> <a href="<?php get_site_url(); ?>"><?php bloginfo( 'name' ); ?></a>  . All Rights Reserved.  </p>
			</div>
		</div>
	</div> <!-- End of Copyright -->
</footer>
<div class="scroll-top">
	<a href="javascript:;" title="scroll to top">
		<i class="fa fa-arrow-up uparrow"></i>
	</a>
</div> <!-- End of Scroll Top -->
<!-- <script type="text/javascript">
	$(".scroll-top").click(function(){
	   $("html, body").animate({
	   	scrollTop: 0
	   }, 'slow');
	 });
</script> -->
<script src=
        "https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script>
  $(document).ready(function(){
    $(".responsive-icon").click(function(){
      $(".menu-responsive-menu-container").slideToggle("slow");
    });

    $(".scroll-top").click(function(){
      $("html, body").animate({
       	scrollTop: 0
      }, 'slow');
     });
  });
</script>
<?php wp_footer(); ?>
</body> <!-- End of Body -->
</html><!-- End of Html -->