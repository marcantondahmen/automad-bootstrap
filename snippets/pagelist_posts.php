<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ set {
	":hideImages": @{ checkboxHideImagesInPagelist }
} @>
<@ foreach in pagelist @>
	<hr class="m-0" />
	<div class="container my-5">
		<div class="row">
			<div class="col-lg-4 col-xl-3 pb-5">
				<h2 class="mb-3">@{ title }</h2>
				<@ date.php @>
				<@ tags.php @>
			</div>
			<div class="col-lg-8 col-xl-6">
				<@ if not @{ :hideImages } @>
					<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png')} { width: 800, height: 600, crop: true } @>
						<a href="@{ url }">
							<img 
							src="@{ :fileResized }" 
							class="img-fluid rounded" 
							alt="@{ :basename }"
							>
						</a>
					<@ end @>	
				<@ end @>
				<div class="lead my-4">
					<@ text_teaser.php @>
				</div>
				<@ more.php @>
			</div>
		</div>
	</div>
<@ end @>