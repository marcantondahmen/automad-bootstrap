<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ if not @{ checkboxHideFilters } or @{ ?search } @>
	<div id="filters" class="d-flex mt-n5 pt-5">
		<@ if not @{ checkboxHideFilters } @>
			<div class="dropdown mr-2">
				<button 
				class="btn btn-outline-dark dropdown-toggle" 
				type="button" 
				data-toggle="dropdown" 
				aria-haspopup="true" 
				aria-expanded="false"
				>
					<@ if @{ ?filter } @>
						@{ ?filter }
					<@ else @>
						@{ labelShowAll | def ('Show All') }
					<@ end @>
				</button>
				<div class="dropdown-menu shadow-lg border-0 mt-2">
					<a 
					href="?<@ queryStringMerge { filter: false } @>#filters"
					class="dropdown-item" 
					>
						@{ labelShowAll | def ('Show All') }
					</a>
					<@ foreach in filters @>
						<a 
						href="?<@ queryStringMerge { filter: @{ :filter } } @>#filters"
						class="dropdown-item" 
						>
							@{ :filter }
						</a>
					<@ end @>
				</div>
			</div>	
		<@ end @>
		
		<@ if @{ ?search } @>
			<a 
			href="?<@ queryStringMerge { search: false } @>"
			class="btn btn-outline-primary px-4 rounded-pill"
			>
				&times;&nbsp;"@{ ?search }"
			</a>
		<@ end @>
	</div>
<@ end @>