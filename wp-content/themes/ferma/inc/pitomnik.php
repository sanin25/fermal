<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
?>
<div class="gusibody clearfix">

    <?php
    $args = array(
        'posts_per_page' => 3,
        'category__in' => 5
    );
    $query = new WP_Query($args); ?>

    <h3><a href="<?php echo get_category_link(5); ?>">Питомник растений</a></h3>
    <div class="pitomnikbody">
    <ul class="pitomnik">
    <?php while ( $query->have_posts()) : $query->the_post(); ?>
            <li>
            <div class="pitomnikimg">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(800,600));?></a>
            </div>
         <div class="pitomniktext">
                <h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </h2>
             <br/>
                <?php
                announcement('segment_length','segment_more');
                ?>
                <a href="<?php the_permalink(); ?>">
                    <br/>
                    <div class="more">
                        <span >Читать полностью »</span>
                    </div>
                </a>
            </div>
            </li>
    <?php endwhile; ?>
    </ul>
        </div>
    <h3><a href="<?php echo get_category_link(5); ?>">Посмотреть всё</a></h3>
</div>
<?php wp_reset_postdata();?>


