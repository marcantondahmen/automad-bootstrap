<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/carousel_full_width.php @>

	<@ newPagelist {
		type: 'children',
		context: @{ showPagesBelow }
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
			<ul class="list-unstyled row">
				<@ foreach in pagelist @>
					<li class="media pt-5 col-md-6 col-xl-4">
						<@ with @{ imageProfile } { width: 90, height: 90, crop: true } @>
							<a href="@{ url }">
								<img 
								src="@{ :fileResized }" 
								class="mr-3 mr-sm-4 rounded-circle" 
								alt="@{ :basename }"
								>
							</a>
						<@ end @>
						<div class="media-body pl-2">
							<h5 class="mt-0 mb-2">@{ title }</h5>
							@{ textContact | markdown }
							<div class="mt-3">
								<@ snippets/more.php @>
							</div>
						</div>
					</li>
				<@ end @>
			</ul>
		</div>
	<@ end @>
			
<@ snippets/footer.php @> 