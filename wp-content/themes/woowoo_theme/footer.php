        <footer>
            <div class="falsefooter">
                <div class="menufootcont">
                    <h3>Help</h3>
                    <?php wp_nav_menu( array ('menu' => 'footul')); ?>
                </div>
                <section class="footabout">
                    <?php $page = get_page_by_title( 'About' );?> 
                    <h3><?php echo $page->post_title; ?></h3>
                    <p><?php echo $page->post_excerpt; ?></p>
                </section>
                <form action="" class="footform">
                    <h3>Newsletter</h3>
                    <input type="email">
                    <button>Sign up</button>
                </form>
            </div>
            <div>
                <p>Proudly powered by Wordpress | Designed by CodinCamp</p>
            </div>
            <?php wp_footer() ?>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="main.js"></script>
        </footer>
    </body>
</html> 