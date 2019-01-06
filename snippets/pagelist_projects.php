<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="container py-5 my-3 overflow-hidden">	
	<div class="row m-n5">
		<@ set {
			":hideImages": @{ checkboxHideImagesInPagelist },
			":hideTeasers": @{ checkboxHideTeasersInPagelist }
		} @>
		<@ foreach in pagelist @>				
			<div class="col-md-6 col-lg-4 p-5 align-self-stretch">
				<div class="d-flex flex-column h-100">
					<@ if not @{ :hideImages } @>
						<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png')} { width: 640, height: 480, crop: true } @>
							<a href="@{ url }">
								<img src="@{ :fileResized }" class="mb-4 rounded img-fluid" alt="@{ :basename }">
							</a>
						<@ end @>	
					<@ end @>
					<h5 class="mb-3">@{ title }</h5>
					<@ if not @{ :hideTeasers } @>
						<@ text_teaser.php @>
						<p><small><@ date.php @></small></p>
					<@ end @>
					<div class="d-flex mt-auto pt-2">
						<@ more.php @>
					</div>
				</div>
			</div>
		<@ end @>
	</div>
</div>