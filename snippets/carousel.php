<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ filelist { glob: @{ images }, sort: 'asc' } @>
<@ if @{ :filelistCount } @>
	<div id="carousel" class="overflow-hidden rounded carousel slide carousel-fade" data-ride="carousel">	
		<@ snippet active @><@ 
			if @{ :i | -1 } = 0 @> active<@ end 
		@><@ end @>
		<@ if @{ :filelistCount } > 1 @>
			<ol class="carousel-indicators">
				<@ for 1 to @{ :filelistCount } @>
					<li data-target="#carousel" data-slide-to="@{ :i | -1 }" class="<@ active @>"></li>	
				<@ end @>
			</ol>
		<@ end @>
		<div class="carousel-inner">
			<@ foreach in filelist @>
				<# Reset max height/width. #>
				<@ set {
					":hMax": @{ carouselHeight | def (750) },
					":wMediumMax": 1400,
					":wSmallMax": 750
				} @>
				<@ set {
					":aspectMedium": @{ :wMediumMax | /@{ :hMax } },
					":aspectSmall": @{ :wSmallMax | /@{ :hMax } }
				} @>
				<# Determine relative width, in case height is smaller than :hMax. #>
				<@ if @{ :height } < @{ :hMax } @>
					<@ set {
						":hMax": @{ :height },
						":wMediumMax": @{ :height | *@{ :aspectMedium } | round },
						":wSmallMax": @{ :height | *@{ :aspectSmall } | round }
					} @>	
				<@ end @>
				<# 
				Use max size for images based on the original size
				in case the image is to small. 
				Therefore keep the original width and calculate height by aspect ratio. 
				#>
				<# Medium #>
				<@ if @{ :width } < @{ :wMediumMax } @>
					<@ with @{ :file } { 
						width: @{ :width }, 
						height: @{ :width | /@{ :aspectMedium } }, 
						crop: true 
					} @>
						<@ set {
							":medium": "@{ :fileResized }"
						} @>
					<@ end @>
				<@ else @>
					<@ with @{ :file } { width: @{ :wMediumMax }, height: @{ :hMax }, crop: true } @>
						<@ set {
							":medium": "@{ :fileResized }" 
						} @>
					<@ end @>
				<@ end @>
				<# Small #>
				<@ if @{ :width } < @{ :wSmallMax } @>
					<@ with @{ :file } { 
						width: @{ :width }, 
						height: @{ :width | /@{ :aspectSmall } }, 
						crop: true 
					} @>
						<@ set {
							":small": "@{ :fileResized }"
						} @>
					<@ end @>
				<@ else @>
					<@ with @{ :file } { width: @{ :wSmallMax }, height: @{ :hMax }, crop: true } @>
						<@ set {
							":small": "@{ :fileResized }" 
						} @>
					<@ end @>
				<@ end @>
				<div class="carousel-item<@ active @>">
					<img 
					src="@{ :medium }"
					srcset="@{ :small } 400w,
							@{ :medium } 1400w"
					sizes="(-webkit-min-device-pixel-ratio: 2) 50vw,
						   (min-resolution: 192dpi) 50vw,
						   (min-resolution: 2dppx) 50vw,
						   (-webkit-min-device-pixel-ratio: 3) 33.33vw,
						   (min-resolution: 288dpi) 33.33vw,
						   (min-resolution: 3dppx) 33.33vw"
					class="d-block w-100" 
					alt="@{ :basename }"
					>
					<div class="container d-none d-md-block">
						<div class="carousel-caption">
							@{ :caption | markdown }
						</div>
					</div>
				</div>
			<@ end @>
		</div>
		<@ if @{ :filelistCount } > 1 @>
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		<@ end @>
	</div>
<@ end @>