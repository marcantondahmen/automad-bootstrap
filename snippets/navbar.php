<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ if @{ checkboxNavbarDark } @>
	<@ set {
		":navbar": "navbar-dark bg-dark border-bottom border-dark",
		":form": "bg-dark border-secondary text-light"
	} @>	
<@ else @>
	<@ set {
		":navbar": "navbar-light bg-white border-bottom",
		":form": ""
	} @>
<@ end @>
<nav class="navbar navbar-expand-lg @{ :navbar }">
	<div class="container py-2">
		<a 
		href="/" 
		class="navbar-brand pr-2"
		>
			<@ with @{ logo | def ('/shared/logo*.*') } @>
				<img 
				src="<@ with @{ :file } { height: @{ logoHeight | def (50) } } @>@{ :fileResized }<@ end @>" 
				srcset="<@ with @{ :file } { height: @{ logoHeight | def (50) | *2 } } @>@{ :fileResized } 2x<@ end @>"
				alt="@{ :basename }"
				>
			<@ else @>
				@{ brand | def (@{ sitename })}
			<@ end @>
		</a>
		<button 
		class="navbar-toggler border-0 mr-n2" 
		type="button" 
		data-toggle="collapse" 
		data-target=".navbar-collapse" 
		aria-controls="navbar" 
		aria-expanded="false" 
		aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto mr-4 my-2">
				<@ set { ":hideSecondLevel": @{ checkboxHideSecondLevelNavbar } } @>
				<@ with '/' @>
				<@ newPagelist { type: 'children' } @>
					<@ foreach in pagelist @>
						<@ if @{ :pagelistCount } and not @{ :hideSecondLevel } @>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									@{ title }
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="@{ url }">@{ title }</a>
									<div class="dropdown-divider"></div>
									<@ foreach in pagelist @>
										<a class="dropdown-item" href="@{ url }">@{ title }</a>
									<@ end @>
								</div>
							</li>
						<@ else @>
							<li class="nav-item<@ if @{ :currentPath }@> active<@ end @>">
								<a href="@{ url }" class="px-xl-3 nav-link">@{ title }</a>
							</li>
						<@ end @>
					<@ end @>
				<@ end @>
			</ul>
			<@ with @{ urlActionButton } @>
				<a 
				href="@{ url }" 
				class="btn btn-primary my-2 mr-lg-3 d-block d-md-inline-block"
				>
					@{ title }
				</a>
			<@ end @>
			<@ if @{ urlSearchResults } @>
				<form class="form-inline my-2" action="@{ urlSearchResults }">
					<input 
					class="form-control @{ :form }" 
					type="search" 
					name="search"
					placeholder="@{ placeholderSearch | def ('Search') }" 
					aria-label="Search"
					>
				</form>
			<@ end @>
		</div>
	</div>
</nav>
