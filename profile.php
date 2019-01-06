<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>
	
	<div class="overflow-hidden">
		<div class="container">
			<div class="row d-flex align-items-stretch">
				<div class="col-lg-3 order-3 order-lg-0">
					<@ snippets/sidebar.php @>
				</div>
				<div class="col-lg-6 order-2 order-lg-0 py-5 pr-lg-5">
					<h1 class="mb-3">@{ title }</h1>
					@{ textContact | markdown }
					<div class="lead my-5">
						<@ snippets/text_teaser.php @>
					</div>
					<@ snippets/text.php @>
				</div>
				<div class="col-lg-3 order-1 order-lg-0 pt-5">
					<@ with @{ imageProfile } { width: 420, height: 420, crop: true } @>
						<img src="@{ :fileResized }" alt="@{ :basename }" class="img-fluid rounded" />
					<@ end @>
				</div>
			</div>
		</div>
	</div>
		
<@ snippets/footer.php @> 