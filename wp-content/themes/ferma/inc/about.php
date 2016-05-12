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
		$textpost = [];
		?>

	  <div class="fotoin clearfix">

		  <ul>
			  <?php while ( $loop->have_posts() ) : $loop->the_post();?>
		  <li class="active"><a href="#<?php the_ID(); ?>"><?php the_post_thumbnail(array(300,200));?></a></a></li>

				  <?php $idp[get_the_ID()] =  get_the_content(); ?>

			   <?php endwhile; ?>
		  </ul>
		  <?php wp_reset_query(); ?>
	  </div>
		<div class="textunber panel-container">

			<?php foreach($idp as $kye => $cont):?>

			<div id="<?php echo $kye; ?>" class="activ">
				<?php echo $cont?>
			</div>
			<?php endforeach;?>

		  </div>

