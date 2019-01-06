<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippet nav @>
	<nav class="nav nav-pills flex-column ml-2">
		<@ foreach in pagelist @>
			<@ if @{ :level } > 1 @>
				<a 
				href="@{ url }" 
				class="d-lg-flex flex-row align-items-stretch nav-link p-0"
				>
					<div class="mr-auto py-2<@ if @{ :current } @> text-dark<@ end @>">
						@{ title }
					</div>
					<@ if @{ :current } @>
						<div class="border-dark border align-self-stretch d-lg-block d-none"></div>
					<@ end @>
				</a>
			<@ end @>
			<@ if @{ :currentPath } @>
				<@ nav @>
			<@ end @>
		<@ end @>
	</nav>
<@ end @>
<@ with '/' @>
	<@ newPagelist { type: 'children' } @>
	<hr class="d-lg-none mx-n5 my-0" /> 
	<div class="ml-n3 mr-n5 pr-5 mr-lg-4 pr-lg-0 py-5 h-100 border-right">
		<@ nav @>
	</div>
<@ end @>