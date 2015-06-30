<?php snippet('header') ?>

      <header class="subheader cf">

         <?php snippet('menu') ?>   

         <div class="count">
         <?php if($page->client_id() == 'private'): ?>
         Current number of private projects: <strong><?php echo page('directory')->children()->visible()->filterBy('client_id', '*=', 'private')->count() ?></strong>
         <?php else: ?>
         Current number of client projects: 
         <strong><?php echo page('directory')->children()->visible()->filterBy('client_id', '!=', 'private')->count() ?></strong>
         <?php endif ?>
         </div>

   	</header>	
   	
   	<section class="content project">

   		<header>
   			<h1><?php echo $page->title() ?></h1>
   			<ul class="meta cf">
   				<li><span data-icon="&#xe000;" aria-hidden="true"></span><a href="<?php echo $page->website() ?>"><?php echo $page->website() ?></a>
   				<li><span data-icon="&#xe002;" aria-hidden="true"></span><a href="mailto:<?php echo $page->client_email() ?>"><?php echo $page->client_email() ?></a></li>
   				<li><span data-icon="&#xe001;" aria-hidden="true"></span><?php echo $page->person() ?></li>
   				<li><span data-icon="&#xe003;" aria-hidden="true"></span><?php echo $page->client_id() ?></li>
   			</ul>
   		</header>

   		<section>
   			<h1><span data-icon="&#xe004;" aria-hidden="true"></span>Content Management</h1>                        
   				<table>
   					<tbody>
   						<tr>
   							<th>CMS:</th>
   							<td><?php echo $page->cms() ?></td>
   						</tr>
   						<tr>
   							<th>URL:</th>
   							<td><a href="<?php echo $page->cms_url() ?>"><?php echo $page->cms_url() ?></a></td>
   						</tr>
   						<tr>
   							<th>Login:</th>
   							<td><?php echo $page->cms_login() ?></td>
   						</tr>
   						<tr>                 
   							<th>Password:</th>
   							<td><?php echo $page->cms_password() ?></td>
   						</tr>
   					</tbody>
   				</table>
   		</section> <!-- CMS -->

   		<section>
   			<h1><span data-icon="&#xe005;" aria-hidden="true"></span>Statistics</h1>								
   				<table>
   					<tbody>
   						<tr>
   							<th>Software:</th>
   							<td><?php echo $page->stats() ?></td>
   						</tr>
   						<tr>
   							<th>URL:</th>
   							<td><a href="<?php echo $page->stats_url() ?>"><?php echo $page->stats_url() ?></a></td>
   						</tr>
   						<tr>
   							<th>Login:</th>
   							<td><?php echo $page->stats_login() ?></td>
   						</tr>
   						<tr>		    			
   							<th>Password:</th>
   							<td><?php echo $page->stats_password() ?></td>
   						</tr>
   					</tbody>
   				</table>
   		</section>  <!-- Stats -->

   	<hr>
   	  
   		<section class="hosting">
   			<h1><span data-icon="&#xe008;" aria-hidden="true"></span>Webhosting</h1>
   								
   				<table>
   					<tbody>
   						<tr>
   							<th>Provider:</th>
   							<td><?php echo $page->webhosting_provider() ?></td>
   						</tr>
   						<tr>
   							<th>Services:</th>
   							<td><?php echo $page->webhosting_service() ?></td>
   						</tr>
   						<tr>		    			
   							<th>Domain(s):</th>
   							<td><?php echo $page->webhosting_domains() ?></td>
   						</tr>
   					</tbody>
   				</table>
   								
   				<table>
   					<tbody>
   						<tr>
   							<th>Hosting-Admin:</th>
   							<td><a href="<?php echo $page->webhosting_admin() ?>"><?php echo $page->webhosting_admin() ?></a></td>
   						</tr>
   						<tr>
   							<th>Hosting-Login:</th>
   							<td><?php echo $page->webhosting_login() ?></td>
   						</tr>
   						<tr>		    					    			
   							<th>Hosting-Password:</th>
   							<td><?php echo $page->webhosting_password() ?></td>
   						</tr>
   					</tbody>
   				</table>
   								
   				<table>
   					<tbody>
   						<tr>
   							<th>FTP-Server:</th>
   							<td><?php echo $page->ftp_server() ?></td>
   						</tr>
   						<tr>
   							<th>FTP-Login:</th>
   							<td><?php echo $page->ftp_login() ?></td>
   						</tr>
   						<tr>		    					    			
   							<th>FTP-Password:</th>
   							<td><?php echo $page->ftp_password() ?></td>
   						</tr>
   					</tbody>
   				</table>
   				
   				<?php if($page->database_url() != ""): ?>				
   				<table>
   					<tbody>
   						<tr>
   							<th>Database URL:</th>
   							<td><a href="<?php echo $page->database_url() ?>"><?php echo $page->database_url() ?></a></td>
   						</tr>
   						<tr>
   							<th>Database Login:</th>
   							<td><?php echo $page->database_login() ?></td>
   						</tr>
   						<tr>		    					    			
   							<th>Database Password:</th>
   							<td><?php echo $page->database_password() ?></td>
   						</tr>
   					</tbody>
   				</table>
   				<?php endif ?>

   				<?php if($page->mailbox_url() != ""): ?>				
   				<table>
   					<tbody>
   						<tr>
   							<th>Mailbox-URL:</th>
   							<td><a href="<?php echo $page->mailbox_url() ?>"><?php echo $page->mailbox_url() ?></a></td>
   						</tr>
   						<tr>
   							<th>Mailbox-Login:</th>
   							<td><?php echo $page->mailbox_login() ?></td>
   						</tr>
   						<tr>		    					    			
   							<th>Mailbox-Password:</th>
   							<td><?php echo $page->mailbox_password() ?></td>
   						</tr>
   					</tbody>
   				</table>
   				<?php endif ?>

   		</section> <!-- Hosting -->

   		<?php if($page->network1() != ""): ?>

         <hr>
   		<section class="socialmedia">
   			<h1><span data-icon="&#xe007;" aria-hidden="true"></span>Social Media</h1>
   					
   			<table>
   				<tbody>
   					<tr>
   						<th>Network:</th>
   						<td><?php echo $page->network1() ?></td>
   					</tr>
   					<tr>
   						<th>URL:</th>
   						<td><a href="<?php echo $page->network1_url() ?>"><?php echo $page->network1_url() ?></a></td>
   					</tr>
   					<tr>
   						<th>Login:</th>
   						<td><?php echo $page->network1_login() ?></td>
   					</tr>
   					<tr>		    			
   						<th>Password:</th>
   						<td><?php echo $page->network1_password() ?></td>
   					</tr>
   				</tbody>
   			</table>
   						
   			<?php if($page->network2() != ""): ?>
   			<table>
   				<tbody>
   					<tr>
   						<th>Network:</th>
   						<td><?php echo $page->network2() ?></td>
   					</tr>
   					<tr>
   						<th>URL:</th>
   						<td><a href="<?php echo $page->network2_url() ?>"><?php echo $page->network2_url() ?></a></td>
   					</tr>
   					<tr>
   						<th>Login:</th>
   						<td><?php echo $page->network2_login() ?></td>
   					</tr>
   					<tr>		    			
   						<th>Password:</th>
   						<td><?php echo $page->network2_password() ?></td>
   					</tr>
   				</tbody>
   			</table>		
   			<?php endif ?>
   			
   			<?php if($page->network3() != ""): ?>
   			<table>
   				<tbody>
   					<tr>
   						<th>Network:</th>
   						<td><?php echo $page->network3() ?></td>
   					</tr>
   					<tr>
   						<th>URL:</th>
   						<td><a href="<?php echo $page->network3_url() ?>"><?php echo $page->network3_url() ?></a></td>
   					</tr>
   					<tr>
   						<th>Login:</th>
   						<td><?php echo $page->network3_login() ?></td>
   					</tr>
   					<tr>		    			
   						<th>Password:</th>
   						<td><?php echo $page->network3_password() ?></td>
   					</tr>
   				</tbody>
   			</table>	
   			<?php endif ?>	
   				
   		</section> <!-- Social Media -->
   		<?php endif ?>

         <hr>

   		<section>
   			<h1><span data-icon="&#xe006;" aria-hidden="true"></span><?php echo $site->company() ?> Support</h1>				
   				<table>
   					<tbody>
   						<tr>
   							<th>E-Mail:</th>
   							<td><a href="mailto:<?php echo $site->email() ?>"><?php echo $site->email() ?></a></td>
   						</tr>
   						<tr>		    			
   							<th>Phone:</th>
   							<td><?php echo $site->phone() ?></td>
   						</tr>
   					</tbody>
   				</table>
   		</section>  <!-- Support -->
   	</section>	

<?php snippet('footer') ?>