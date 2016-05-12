<?php
/**
 * Шаблон made fermerjeck
  * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
?>
	<div id="tab-container" class="about clearfix">
	<h3>Дружный фермер</h3>

		<?php
		$mypost = array( 'post_type' => 'fermer', );
		$loop = new WP_Query( $mypost );
		$idp = [];
		$attachments = [];
		?>

	  <div class="fotoin clearfix">

		  <ul>
			  <?php while ( $loop->have_posts() ) : $loop->the_post();?>
		  <li class="active"><a href="#<?php the_ID(); ?>"><?php the_post_thumbnail(array(300,200));?></a></a></li>

				  <?php $idp[get_the_ID()] =   announcement('about_length','segment_more',$echo = true);
				  $attachments = get_attached_media( '', $post->ID );


				  ?>


			   <?php endwhile; ?>
		  </ul>
		  <?php wp_reset_query(); ?>
	  </div>
		<div class="textunber panel-container">

			<?php while ( $loop->have_posts() ) : $loop->the_post();?>

			<div id="<?php the_ID(); ?>" class="">
				<?php
				the_content()
				?>
				</div>

			<?php endwhile; ?>

			<?php wp_reset_query(); ?>
		  </div>

