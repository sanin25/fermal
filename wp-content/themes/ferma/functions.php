<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
register_sidebar(); // Регистрируем сайдбар
/*Подключаю JS*/

    function addAllScriptsAndCss(){
        /*Scripts*/
        wp_enqueue_script( 'my-script', get_template_directory_uri().'/js/myscript.js',array('jquery'));

        wp_enqueue_script( 'my-bxslider', get_template_directory_uri().'/js/jquery.bxslider.min.js',array('jquery'));

        wp_enqueue_script( 'my_easytabs', get_template_directory_uri().'/js/jquery.easytabs.min.js',array('jquery'));

        wp_enqueue_script( 'my_magnific', get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery'));

        /*Css*/

        wp_enqueue_style( 'my-mystyle', get_stylesheet_directory_uri().'/css/style.css');

        wp_enqueue_style( 'my-animate', get_stylesheet_directory_uri().'/css/animate.css');

        wp_enqueue_style( 'my-magnific', get_stylesheet_directory_uri().'/css/magnific-popup.css');
    }

    add_action('wp_enqueue_scripts', 'addAllScriptsAndCss');


    function segment_more($more) {
    return '...';
    }
    function segment_length($lengt) {
    return 6;
    }

    function announcement($length, $more='') {
       global $post;
       add_filter('excerpt_length', $length);
       add_filter('excerpt_more', $more);
         $output = get_the_excerpt();
         $output = apply_filters('wptexturize', $output);
         $output = apply_filters('convert_chars', $output);
         $output = ''.$output.'';
    echo $output;
    }
     /*ajax запросы*/
    
    function my_mail_callback(){
      $recepient = "tootii@mail.ru";
      $name = trim($_POST["name"]);
      $mail= trim($_POST["mail"]);
      $text = trim($_POST["textarea"]);
      $message = "Имя: $name \nПочта: $mail \nТекст: $text";
    $pagetitle = "Новая заявка с сайта \"$sitename\"";
    $headers[] = 'From: Миша <tootii@mail.ru>';
    $headers[] = 'Content-type: text/html; charset=utf-8';
     
       if (wp_mail($recepient, $pagetitle, $message, $headers))
        echo "Сообщения отправлено!";
       else
        echo "Не отправлено!";
       die();
    }
    add_action('wp_ajax_my_mail', 'my_mail_callback');
    add_action('wp_ajax_nopriv_my_mail', 'my_mail_callback');



?>