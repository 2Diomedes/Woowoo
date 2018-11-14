<?php
get_header(); 
$x = 0;
?>
<main>
    <div class="mainnavpos">
        <?php
            $orderby = 'name';
            $order = 'asc';
            $hide_empty = false ;
            $cat_args = array(
                'orderby'    => $orderby,
                'order'      => $order,
                'hide_empty' => $hide_empty,
            );
            
            $product_categories = get_terms( 'product_cat', $cat_args );
            
            if( !empty($product_categories) ){
                ?>
                <ul class="mainnav">
                <?php
                foreach ($product_categories as $key => $category) {
                    ?><li><?php
                    echo $category->name;
                    ?></li><?php
                }
                ?>
                </ul>
                <?php
            }
        ?> 
            <a href="#" class="allprod">All products</a>
    </div>
    <?php
    		$args = array(
			'post_type' => 'product',
            'posts_per_page' => 6,
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
            ?> 
            <div class="cards"> 

            <?php
            while ( $loop->have_posts() ) : $loop->the_post();
            ?> 
                <div class="card">
                    <?php the_post_thumbnail();?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title()?></h5>
                        <p class="card-text"><?php the_content()?></p>
                        <?php 
                        $id = $product->get_id();
                        $link = get_permalink( $id ); 
                        ?>
                        <a href="<?php echo $link ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            <?php
			endwhile;?>

            </div>
            <?php
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
        ?>
</main>
<?php
get_footer();


