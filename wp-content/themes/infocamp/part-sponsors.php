<?php 
  $args = array(
    'post_type' => 'sponsors',
    'sponsorship_level' => 'discovery'
  );

  $sponsors = new WP_Query( $args );

  if( $sponsors->have_posts() ) { ?>

  <aside id="sponsors" class="small-12 large-12 columns">

  <?php
  while( $sponsors->have_posts() ) {
    $sponsors->the_post();
    ?>

    <h2 class="section-title">
    	<span>Sponsors</span>
    </h2>
    
      <?php 
      	$logo = get_field('sponsor_logo');

      	if ($logo): ?>
      		<div class="logo-wrap small-4 large-3 columns">
      			<img src="<?php echo $logo; ?>" />
      		</div>
      	<?php endif; ?>
    <?php } ?>

   </aside>

	<?php }
	else {
	  continue;
	}
?>