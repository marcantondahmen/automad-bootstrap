<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>
	
	<div class="overflow-hidden">
		<div class="container">
			<div class="row d-flex align-items-stretch">
				<div class="col-lg-9 col-xl-8 m-auto py-5">
					<h1 class="mb-3">@{ title }</h1>
					<div class="lead my-5">
						<@ snippets/text_teaser.php @>
					</div>
					<@ snippets/text.php @>
				</div>
			</div>
		</div>
	</div>
	
<@ snippets/footer.php @> 