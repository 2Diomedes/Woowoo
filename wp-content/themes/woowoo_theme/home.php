<?php
/*
    Template Name: Home
*/
get_header(); 
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
                ?><li><a href=" <?php echo $catlink; ?> "><?php
                $catlink = get_term_link( $category );
                echo $category->name;
                ?></a></li><?php
            }
            ?>
        </ul>
        <?php
            }
        ?> 
            <a href="" class="allprod">All products</a>
        </div>
        <div class="cards">
            <?php 
            $products = wc_get_products(array(
                "limit" => "6",
                "order_by" => "date",
                'order' => 'DESC',
            ));
            foreach ($products as $product):
            ?>
                <a href="<?php echo get_permalink( $product->get_id() ); ?>">
                    <div class="card">
                    <?php echo $product->get_image();?>
                        <div class="card-body">
                        <h5><?php echo $product->get_name();?>€</h5>
                        <h4><?php echo $product->get_price();?>€</h4>
                        </div>
                    </div>
                </a>
        <?php endforeach; ?>
        </div>
        <div class="showcont">
        <button class="show"> Show all</button>
        </div>
</main>
<?php
get_footer();