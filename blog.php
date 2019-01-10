<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>

	<@ newPagelist {
		type: 'children',
		context: @{ showPagesBelow },
		filter: @{ ?filter },
		search: @{ ?search },
		sort: 'date desc',
		template: @{ templateFilter }
	} @>
	
	<@ if not @{ checkboxHideTeaser } @>
		<div class="container pt-5 pb-5">
			<div class="row">
				<# Use one single grid column to limit the width on large screens. #>
				<div class="col-lg-9">
					<h1 class="mb-5">@{ title }</h1>
					<div class="lead mb-n2">
						<@ snippets/text_teaser.php @>
					</div>	
				</div>
			</div>
		</div>
	<@ end @>

	<@ if @{ checkboxShowAllPagesInPagelist } or @{ ?search } @>
		<@ pagelist { type: false } @>
	<@ end @>
	
	<@ if @{ :pagelistCount } @>
		<div class="container pb-5">
			<@ snippets/filters.php @>
		</div>
		<@ snippets/pagelist_posts.php @>
	<@ end @>
	
<@ snippets/footer.php @> 