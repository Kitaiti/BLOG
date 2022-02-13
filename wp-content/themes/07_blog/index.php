   <?php get_header(); ?>
   <main>

      <section class="main">
         <div class="inner">
            <section class="memories" id="Phone">
               <h1>Memories</h1>
               <div class="memories_visual">
                  <?php if (have_posts()): //もし1件以上記事があったら ?>
                  <?php while (have_posts()): //記事がある間は繰り返す
                  the_post(); //次の記事のデータをセットする?>
                  <!-- 1記事め開始 -->
                  <article class="post">
                     <a href="<?php the_permalink(); ?>">
                        <div class="post-image">
                           <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
                                 <?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
                                 <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                                 <?php endif; ?>
                        </div>
                        <div class="post-text">
                           <h2><?php if ( mb_strlen( $post->post_title, 'UTF-8' ) > 25 )
                                 {  $title = mb_substr( $post->post_title, 0, 25, 'UTF-8' ); echo $title . '…';}
                                 else {  echo $post->post_title; } ?></h2>
                           <time><?php the_date(); ?></time>
                        </div>
                     </a>
                  </article>
                  <!--1記事め終了-->
                  <?php endwhile; //ループ終了 ?>
                  <?php else: //もし、表示すべき記事がなかったら?>
                  <p>まだ記事はありません。</p>
                  <?php endif; //条件分岐終了 ?>
               </div>

               <!-- ページネーション開始 -->
                     <?php the_posts_pagination(); ?>
               <!-- ページネーション終了 -->
　　　　　　　</section>

            <section>
               <div class="memories_flex">
                  <section class="memories2" id="PC">
                     <h2 class="archive-title"><?php the_archive_title('<h1 class="page-title">', '</h1>'); ?></h2>
                     <div class="memories_visual2">
                        <?php if (have_posts()): //もし1件以上記事があったら ?>
                        <?php while (have_posts()): //記事がある間は繰り返す
                        the_post(); //次の記事のデータをセットする?>
                        <!-- 1記事め開始 -->
                        <article id="post-<?php the_ID(); ?>"class="post2">
                           <a href="<?php the_permalink(); ?>">
                           <div class="post-image">
                              <p>
                                 <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
                                 <?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
                                 <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                                 <?php endif; ?>
                              </p>
                           </div>
                           <div class="post-text">
                                 <h2><?php if ( mb_strlen( $post->post_title, 'UTF-8' ) > 13 )
                                 {  $title = mb_substr( $post->post_title, 0, 13, 'UTF-8' ); echo $title . '…';}
                                 else {  echo $post->post_title; } ?></h2>
                                 <time><?php the_date(); ?></time>
                           </div>
                        </article>
                        <!--1記事め終了-->
                        <?php endwhile; //ループ終了 ?>
                        <?php else: //もし、表示すべき記事がなかったら?>
                        <p>まだ記事はありません。</p>
                        <?php endif; //条件分岐終了 ?>
                     </div>

                     <!-- ページネーション開始 -->
                     <?php the_posts_pagination(); ?>
                     <!-- ページネーション終了 -->
                  </section>
                  <!-- sidebar -->
                  <?php get_sidebar(); ?>
               </div>
            </section>
         </div>
      </section>

   </main>

   <!-- footer -->
   <?php get_footer(); ?>
   <?php wp_footer(); ?>
</body>

</html>