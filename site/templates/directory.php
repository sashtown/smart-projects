<?php snippet('header') ?>

      <header class="subheader cf">

         <?php snippet('menu') ?>   

         <div class="count">Current number of entire projects: <strong><?php echo $pages->find('directory')->children()->visible()->count() ?></strong></div>

   	</header>

   	<div class="hello">
   		<?php echo kirbytext($site->hello()) ?>
   	</div>
   	
   	<section class="content listing">
   		<table>
   			<thead>
   				<tr>
   					<th>Project</th>
   					<th>Client / Owner</th>
   					<th>Client ID</th>
   				</tr>
   			</thead>
   			<tbody>
   				<? $projects = $pages->find('directory')->children()->visible()->sortBy('date', 'desc')->limit(5) ?>
   				<? foreach($projects as $project): ?>
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