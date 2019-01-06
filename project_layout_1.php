<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<div class="overflow-hidden">
		<div class="container">
			<div class="row d-flex align-items-stretch">
				<div class="col-lg-3 order-2 order-lg-0">
					<@ snippets/sidebar.php @>
				</div>
				<div class="col-lg-9 order-1 order-lg-0 py-5">
					<h1 class="mb-3">@{ title }</h1>
					<@ if @{ date } or @{ tags } @>
						<p class="mb-5">
							<@ snippets/date.php @>
							<@ snippets/tags.php @>
						</p>
					<@ end @>
					<@ snippets/carousel.php @>	
					<div class="lead my-5">
						<@ snippets/text_teaser.php @>
					</div>
					<@ snippets/text.php @>
				</div>
			</div>
		</div>
	</div>
		
	<@ newPagelist { 
		type: 'related', 
		filter: @{ ?filter },
		sort: @{ sortPages } 
	} @>	
	
	<@ if @{ :pagelistCount } @>
		<div class="border-top py-3">
			<@ snippets/pagelist_projects.php @>
		</div>
	<@ end @>

<@ snippets/footer.php @> 