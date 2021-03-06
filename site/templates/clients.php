<?php snippet('header') ?>

      <header class="subheader cf">

         <?php snippet('menu') ?> 

         <div class="count">
            Current number of client projects: 
            <strong><?php echo $pages->find('directory')->children()->visible()->filterBy('client_id', '!=', 'private')->count() ?></strong>
         </div>

      </header>

      <section class="content listing">
         <h1><?php echo $page->headingtitle() ?></h1>
         <table>
            <thead>
               <tr>
                  <th>Project</th>
                  <th>Client</th>
                  <th>Client ID</th>
               </tr>
            </thead>
            <tbody>
               <?php $projects = $pages->find('directory')->children()->visible()->sortBy('title')
                                    ->filterBy('client_id', '!=', 'private') ?>
               <?php foreach($projects as $project): ?>
               <tr>
                  <td><a href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a></td>
                  <td><?php echo $project->client() ?></td>
                  <td><?php echo $project->client_id() ?></td>
               </tr>
               <?php endforeach ?>
            </tbody>
         </table>
      </section>

<?php snippet('footer') ?>