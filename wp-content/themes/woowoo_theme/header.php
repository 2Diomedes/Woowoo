<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head() ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="wp-content/themes/woowoo_theme/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="top">
                <h1>codishop</h1>
                <nav>
                    <?php wp_nav_menu( array ('menu' => 'nav')); ?>
                </nav>
                <ul class="side-icons">
                    <a href="#"><li><i class="far fa-user"></i></li></a>
                    <a href="#"><li><i class="fas fa-shopping-bag"></i></li></a>
                    <a href="#"><li><i class="fas fa-search"></i></li></a>
                </ul>
            </div>
        <?php
            $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12,
            'product_cat' => "Axes",
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                ?> 
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                
                <?php
                $x = 0;
                while ( $loop->have_posts() ) : $loop->the_post();
                    if ($x == 0):
                ?> 
                <div class="carousel-item active">
                    <?php the_post_thumbnail();?>
                    <div class="carousel-text">
                        <h3><?php the_title();?></h3>
                        <p><?php the_content();?></p>
                        <button>By this awesome shit nigga</button>
                    </div>
                </div> 

                <?php else: ?>
                <div class="carousel-item">
                    <?php the_post_thumbnail();?>
                    <div class="carousel-text">
                        <h3><?php the_title();?></h3>
                        <p><?php the_content();?></p>
                        <button>By this awesome shit nigga</button>
                    </div>
                </div> 
                    
                <?php
                endif;
                $x++;
                endwhile;?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div><?php
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
        ?>

        </header>
        
