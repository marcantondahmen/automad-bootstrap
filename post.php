<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>

	<div class="container">
		<div class="row d-flex align-items-stretch pb-5">
			<div class="col-lg-4 col-xl-3 pt-5 mt-1">
				<@ snippets/date.php @>
				<@ snippets/tags.php @>
			</div>
			<div class="col-lg-8 col-xl-6 pt-5">
				<h1 class="mb-5">@{ title }</h1>
				<div class="lead my-5">
					<@ snippets/text_teaser.php @>
				</div>
				<@ snippets/text.php @>
			</div>
		</div>
	</div>
	
	<@ newPagelist { type: 'related' } @>	
	<@ if @{ :pagelistCount } @>
		<@ snippets/pagelist_posts.php @>
	<@ end @>

<@ snippets/footer.php @> 