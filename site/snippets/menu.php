   <nav>
      <ul>
      <?php if($page->isHomepage()): ?>
      <li><a class="active" href="<?php echo url() ?>">Dashboard</a></li>
      <?php else: ?>
      <li><a href="<?php echo url() ?>">Dashboard</a></li>
      <?php endif ?>
      <?php foreach($pages->visible() AS $p): ?>
      <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
      <?php endforeach ?>
      </ul>
   </nav>