<?php get_header(); ?>

   <main>
      <div class="inner">
      <div class="main_flex">
         <section class="text">
               <?php if (have_posts() ): ?>
                  <!-- もし、記事が1件以上あったら-->
                  <?php while (have_posts()):the_post(); ?>
                  <!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
                  <article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
               <h1><?php the_title(); ?></h1>
               <article class="text_main">
                  <?php the_content( ); ?>
               </article>
               <div class="entry-footer"> <span class="comments-link"><a href="#">1件のコメント</a></span>
                  <?php the_tags( '<span class="tag-links">', '  ', '</span>' ); ?>
                  <!-- 記事のタグコンマ「,」で区切る -->
               </div>
               <?php endwhile; ?>
               <!-- 繰り返し終了 -->

               <?php endif; ?>
               <!-- if文終了。-->

         </section>

         <!-- sidebar -->
                  <?php get_sidebar(); ?>
      </div>

      <section class="Comment">
         <div class="inner">
            <!-- コメント開始 -->
      <section class="comments">
      <?php comments_template(); ?>
      </section>
<!-- コメント終了 -->
         </div>
      </section>


      <section class="Other" id="Phone">
         <div class="inner">
            <div class="memories_visual4">
               <?php query_posts(array('orderby' => 'rand', 'showposts' => 4));
               if (have_posts()) :
               while (have_posts()) : the_post(); ?>
               <!-- /* 繰り返し表示させる部分 */ -->
               <article id="post-<?php the_ID(); ?>" class="post2">
                           <a href="<?php the_permalink(); ?>">
                              <div class="post-image">
                                 <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
                                 <?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
                                 <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                                 <?php endif; ?>
                              </div>
                              <div class="post-text">
                                 <h2><?php if ( mb_strlen( $post->post_title, 'UTF-8' ) > 13 )
                                 {  $title = mb_substr( $post->post_title, 0, 13, 'UTF-8' ); echo $title . '…';}
                                 else {  echo $post->post_title; } ?></h2>
                                 <time><?php the_date(); ?></time>
                              </div>
                           </a>
               </article>
               <?php endwhile; endif; ?>
            </div>
         </div>
      </section>

      <section class="Other_PC" id="PC">
            <h2>OTHER</h2>
            <div class="memories_visual3">
               <?php query_posts(array('orderby' => 'rand', 'showposts' => 4));
               if (have_posts()) :
               while (have_posts()) : the_post(); ?>
               <!-- /* 繰り返し表示させる部分 */ -->
               <article id="post-<?php the_ID(); ?>" class="post2">
                           <a href="<?php the_permalink(); ?>">
                              <div class="post-image">
                                 <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
                                 <?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
                                 <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                                 <?php endif; ?>
                              </div>
                              <div class="post-text">
                                 <h2><?php if ( mb_strlen( $post->post_title, 'UTF-8' ) > 15 )
                                 {  $title = mb_substr( $post->post_title, 0, 15, 'UTF-8' ); echo $title . '…';}
                                 else {  echo $post->post_title; } ?></h2>
                                 <time><?php the_date(); ?></time>
                              </div>
                           </a>
               </article>
               <?php endwhile; endif; ?>
            </div>
      </section>
</div>
   </main>

   <?php get_footer(); ?>
   <?php wp_footer(); ?>
</body>
</html>