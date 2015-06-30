<?php snippet('header') ?>

      <header class="subheader cf">
         
         <?php snippet('menu') ?> 

         <div class="count">Current number of entire projects: <strong><?php echo page('directory')->children()->visible()->count() ?></strong></div>

      </header>

      <section class="content page">
         <h1><?php echo $page->title() ?></h1>
         <?php echo $page->text()->kirbytext() ?>
         
      </section>  

<?php snippet('footer') ?> 