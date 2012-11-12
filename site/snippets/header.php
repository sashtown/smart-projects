<?php
/* 
Header Snippet - Smart Projects Kirby Theme 
******************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />

   <?php if($page->isHomepage()): ?>
   <title>Directory | <?php echo html($site->title()) ?></title>
   <?php else: ?>
   <title><?php echo html($page->title()) ?></title>
   <?php endif ?>

   <?php if($page->description() != ''): ?>
   <meta name="description" content="<?php echo html($page->description()) ?>" />
   <?php else: ?>
   <meta name="description" content="<?php echo html($site->description()) ?>" />
   <?php endif ?>

   <meta name="robots" content="index, follow" />

   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
   <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
   <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon.png') ?>" />

   <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

   <div class="wrapper cf">

      <header class="branding cf">

         <a class="logo" href="<?php echo url() ?>"></a>

         <form role="search" class="search" action="<?php echo url('search') ?>">
            <label for="s">Search</label>
            <input type="search" class="searchword" name="q" />
         </form>

      </header>
