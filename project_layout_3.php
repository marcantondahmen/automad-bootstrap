<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>
	<div class="container overflow-hidden">
		<div class="row mx-n5 pt-5">
			<div class="col-lg-6 px-5 pb-5">
				<h1 class="mb-3">@{ title }</h1>
				<@ if @{ date } or @{ tags } @>
					<p class="mb-5">
						<@ snippets/date.php @>
						<@ snippets/tags.php @>
					</p>
				<@ end @>
				<div class="lead mt-5">
					<@ snippets/text_teaser.php @>
				</div>
			</div>
			<div class="col-lg-6 px-5 pb-5">
				<@ snippets/text.php @>
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