<?php
/*
Template Name: Landing Page
*/
?>
<?php get_header(); ?>

<header class="container" role="banner">
	<div class="row">
	  <div class="small-12 columns">
	    <h1>InfoCamp Seattle</h1>
<br/>
<br/>
	    <h2 class="tagline">Information. Conversations. Connections.</h2>
	    <h3>October 17, 2015</h3>
	  </div>
  </div>
</header>

<div class="about">
	<div class="row">
		<div class="small-12 large-12 columns">
			<!--<h2 class="section-title"><span>What</span></h2>-->
			<p>A 1-DAY UNCONFERENCE FULL OF CONVERSATION, COLLABORATION, AND LEARNING FOR PEOPLE WHO WORK WITH INFORMATION IN ALL ITS FORMS.</p>
			<a href="http://seattle.infocamp.org/wp-content/uploads/2015/10/Infocamp2015Map.png"><img id="mgh-map" src="http://seattle.infocamp.org/wp-content/uploads/2015/10/Infocamp2015Map.png"></a>
			<!--<a href="http://seattle.infocamp.org/wp-content/uploads/2015/10/20151017_132224.jpg"><img id="mgh-map" src="http://seattle.infocamp.org/wp-content/uploads/2015/10/20151017_132224.jpg"></a>-->
		</div>
	</div>
</div>

<div class="date-place">
	<div class="row">
		<div class="small-12 large-6 columns half-section">
			<h2>When</h2>
			<p>InfoCamp begins in</p>
			<ul class="countdown">
				<li> <span class="days">00</span>
					<p class="days_ref">days</p>
				</li>
				<li> <span class="hours">00</span>
					<p class="hours_ref">hours</p>
				</li>
				<li> <span class="minutes">00</span>
					<p class="minutes_ref">min</p>
				</li>
				<li> <span class="seconds">00</span>
					<p class="seconds_ref">sec</p>
				</li>
			</ul>
			<?php
			$when = get_field('when');
			if($when):
				echo $when;
			endif; ?>

		</div>
		<div class="small-12 large-6 columns half-section">

			<h2>Where</h2>
			<!-- <?php 
			$where = get_field('where');
			if($where): ?>
			<p><?php echo $where; ?></p>
			<?php endif; ?>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5375.034006555408!2d-122.30792!3d47.654952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549014f2a95c2899%3A0xb2525ccd291489c!2sMary+Gates+Hall.+University+of+Washington!5e0!3m2!1sen!2sus!4v1403211525839" width="350" height="250" frameborder="0" style="border:0"></iframe> --> 



<div class="table-responsive">
<table>
  <tr>
    <th></th>
    <th>Ballard 284</th>
    <th>Capitol Hill 271</th>
    <th>Green Lake 231</th>
    <th>International District 287</th>
    <th>Pioneer Square 238</th>
    <th>University District 295</th>
  </tr>
  <tr>
    <td><strong>Session 1</strong></td>
    <td>Accessibility Chat</td>
    <td>The U in UX</td>
    <td>Flows:Spaces:Stories</td>
    <td>Community Education</td>
    <td>Getting to the Heart in Audience Research</td>
    <td>Improvising Your Life (Lean)</td>
  </tr>
  <tr>
    <td><strong>Session 2</strong></td>
    <td>UX & PO Single Role</td>
    <td>Caucus!!</td>
    <td>Mindfulness & Design in IA</td>
    <td>Designing for Survival</td>
    <td>Digital Literacy - What Works What Doesn't</td>
    <td>Usability Note Taking</td>
  </tr>
  <tr>
    <td><strong>Session 3</strong></td>
    <td>Brainstorm a Startup Idea</td>
    <td>The U in UX, Part 2</td>
    <td>SPL Rebrand</td>
    <td>Privacy Web App: Tor</td>
    <td></td>
    <td>UX in Video Games: A Conversation</td>
  </tr>
  <tr>
    <td><strong>Session 4</strong></td>
    <td>Engaging Developers in Design</td>
    <td>Content Vendors: Adversaries or Advocates?</td>
    <td>eComm + UX</td>
    <td>Design for Survival Brainstorm</td>
    <td>Accessibility Chat Cont'd</td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Session 5</strong></td>
    <td></td>
    <td></td>
    <td>Drupal Freestyle</td>
    <td>First Resort: Libraries As Social Service Providers</td>
    <td>How Do I Get People to Use My Documentation?</td>
    <td></td>
  </tr>
</table>
<p><em>Scroll left on mobile.</em></p>
</div> 

		</div>
	</div>
</div>

<div class="sponsors">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h2 class="section-title"><span>Sponsors</span></h2>
				<?php 
				$sponsors = get_field('sponsors_container');
				if($sponsors): ?>
					<?php echo $sponsors; ?>
				<?php endif; ?>
		</div>
	</div>
</div>

<section class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>
  <div class="row">

	<div class="small-12 large-12 columns" role="main">

		<?php /* Recent posts */ ?>

		<h2 class="section-title"><span>Blog</span></h2>

		<div class="row section">
			<?php
				$args = array( 'posts_per_page' => 5 );

				$posts = get_posts( $args );
				foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endforeach; 
			wp_reset_postdata();?>
		</div>
		
	</div>
		
<?php get_footer(); ?>