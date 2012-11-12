<?php
	 $search = new search(array(
	 'searchfield' => 'q',
	 'mode' => 'and',
	 'ignore' => array('error', 'docs', 'directory'),
	 'paginate' => 5

	 ));

	 $results = $search->results();

	 if($results) $results->paginate(5);
?>

<?php snippet('header') ?>

      <header class="subheader cf">

         <?php snippet('menu') ?>   
   		
         <div class="count">Current number of entire projects: <strong><?php echo $pages->find('directory')->children()->visible()->count() ?></strong></div>

   	</header>
   	 
   	<section class="content listing">

   	<?php if($results): ?>
   	<h1><?php echo $results->pagination->countItems() ?> 
   	<?php if($results->pagination->countItems()=='1'): ?>
   	result<?php else: ?>results<?php endif ?>
   	for <em><?php echo $search->query(); ?></em></h1>
   	<?php endif ?>   

   	<?php if($results): ?>

   	<table>
   		<thead>
   			<tr>
   				<th>Project</th>
   				<th>Client / Host</th>
   				<th>Client ID</th>
   			</tr>
   		</thead>
   		<tbody>
   		<?php foreach($results as $result): ?>
   			<tr>
   				<td><a href="<?php echo $result->url() ?>"><?php echo $result->title() ?></a></td>
   				<td><?php echo $result->client() ?></td>
   				<td><?php echo $result->client_id() ?></td>
   			</tr>
   		<?php endforeach ?>
   		</tbody>
   	</table>

   	<?php else: ?>
   	<h1 class="results">Sorry... No results.</h1>

   	<form role="search" class="search" action="<?php echo thisURL() ?>">
   		<label for="q">Search</label>
   		<input type="search" class="searchword" name="q" placeholder="Search again..." />
   	</form>
   	<?php endif ?>

   	</section>
   		
<?php snippet('footer') ?>