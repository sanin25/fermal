<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
?>
<div class="gusibody">

    <?php
    $args = array(
        'posts_per_page' => 3,
        'category__in' => 7
    );
    $query = new WP_Query($args); ?>
    <div class="tab-pitomnik">
    <h3><a href="<?php echo get_category_link(7); ?>">Зеленый уголок</a></h3>
        <div id="pitom1">
    <div class="pitomnikbody">
        <!--tab Питомник растений-->
    <ul class="pitomnik">
    <?php while ( $query->have_posts()) : $query->the_post(); ?>
            <li>
            <div class="pitomnikimg">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(800,600));?></a>
            </div>
         <div class="pitomniktext">
                <h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </h2>
             <hr class="hr">
             <br/>
                <?php
                announcement('pitomnik_length','segment_more');
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
        <?php wp_reset_postdata();?>
    </ul>
        </div>
            </div>
        <!--tab водные растения-->
        <div id="pitom2">
            <?php
            $args2 = array(
                'posts_per_page' => 3,
                'category__in' => 8
            );
            $query = new WP_Query($args2); ?>
            <div class="pitomnikbody">
                <!--tab Питомник растений-->
                <ul class="pitomnik2">
                    <?php while ( $query->have_posts()) : $query->the_post(); ?>
                        <li>
                            <div class="pitomnikimg">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(800,600));?></a>
                            </div>
                            <div class="pitomniktext">
                                <h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </h2>
                                <hr class="hr">
                                <br/>
                                <?php
                                announcement('pitomnik_length','segment_more');
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
                    <?php wp_reset_postdata();?>
                </ul>
            </div>
        </div>
        <div class="pitmenu">
            <ul>
                <li class='tab' ><a href="#pitom1">Питомник растений</a></li>
                <li class='tab'><a href="#pitom2">Водиные растений</a></li>
            </ul>
        </div>
        </div>

    <h3><a href="<?php echo get_category_link(7); ?>">Посмотреть всё</a></h3>

    </div>



