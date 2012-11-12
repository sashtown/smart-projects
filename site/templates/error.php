<?php snippet('header') ?>

      <header class="subheader cf">
         
         <?php snippet('menu') ?> 

         <div class="count">Current number of entire projects: <strong><?php echo $pages->find('directory')->children()->visible()->count() ?></strong></div>

      </header>

      <section class="content page">
         <h1><?php echo $page->title() ?></h1>
         <?php echo kirbytext($page->text()) ?>
         
      </section>  

<?php snippet('footer') ?> 