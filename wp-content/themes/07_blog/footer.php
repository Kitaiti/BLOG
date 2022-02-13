<footer>
      <article class="footer" id="Phone">
         <div class="inner">
            <?php
             // メインメニューを表示
              if ( has_nav_menu( 'footer-menu' )){
              $footerMenu = array(
              'theme_location' => 'footer-menu',
              'menu_id' => 'footer-menu',
              'menu_class' => 'navigate group',
              'container' => false,
              'link_before' => '<span>',
              'link_after' => '</span>',
              'depth' => 0,);
              wp_nav_menu( $footerMenu );};
            ?>
         </div>
      </article>

       <div class="copy">
         <div class="inner">
            <small>@copy light</small>
         </div>
       </div>
</footer>