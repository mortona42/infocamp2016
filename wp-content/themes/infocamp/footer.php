  
  </div>
</section>

<footer class="footer">
	<div class="row">
		<?php do_action('foundationPress_before_footer'); ?>
		<?php dynamic_sidebar("footer-widgets"); ?>
		<?php do_action('foundationPress_after_footer'); ?>
	</div>
</footer>
<a class="exit-off-canvas"></a>
	
  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<div style="padding: 10px 0; background: #444; color: #fff">
<p class="row">Site by <a href="http://erikadeal.com">Erika Deal</a></p>
</div>
<?php do_action('foundationPress_before_closing_body'); ?>
<script class="source" type="text/javascript">
        $('.countdown').downCount({
            date: '10/17/2015 9:00:00',
            offset: -7
        }, function () {
            //alert('InfoCamp is here!');
        });
</script>
</body>
</html>