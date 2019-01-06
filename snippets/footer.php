<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
	<div class="border-top py-2">
		<div class="container py-5">
			<@ newPagelist { type: 'breadcrumbs' } @>
			<@ if @{ :pagelistCount } > 1 @>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent px-0 py-2">
						<@ foreach in pagelist @>
							<li class="breadcrumb-item"><a href="@{ url }">@{ title }</a></li>
						<@ end @>
					</ol>
				</nav>
			<@ end @>
			<@ newPagelist {
				excludeHidden: false
			} @>	
			<nav class="d-flex flex-column nav mx-n3 my-4">
				<@ foreach in pagelist @>
					<@ if @{ checkboxShowInFooter } @>
						<a class="nav-link" href="@{ url }">@{ title }</a>
					<@ end @>				
				<@ end @>
				<@ if not @{ checkboxHideSignIn } @>
					<a href="/dashboard" class="nav-link">Sign in</a>
				<@ end @>
			</nav>
			@{ textFooter | markdown }
			<p class="mt-4">
				  &copy; @{ :now | dateFormat ('Y') } 
				  <a href="/" class="text-dark">@{ sitename }</a>
			</p>
		</div>
	</div>
	<script src="/vendor/components/jquery/jquery.slim.min.js"></script>
	<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	@{ itemsFooter }
</body>
</html>