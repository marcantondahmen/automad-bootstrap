<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!doctype html>
<html lang="en">
<head>
	<@ set {
		metaTitle: "@{ sitename } / @{ title | def ('404') }"
	} @>
    <title>@{ metaTitle | stripTags }</title>
	<@ Automad/MetaTags {
		description: @{ textTeaser | stripTags },
		ogTitle: @{ metaTitle | stripTags },
		ogDescription: @{ textTeaser | stripTags },
		ogImage: @{ ogImage },
		twitterCard: 'summary_large_image'
	} @>
	<@ with @{ favicon } @><link href="@{ :file }" rel="shortcut icon" type="image/x-icon" /><@ end @>
	<@ with @{ appleTouchIcon } @><link href="@{ :file }" rel="apple-touch-icon" /><@ end @>
	<link rel="stylesheet" href="@{ bootstrapCss | def ('/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }" />
	@{ itemsHeader }
</head>

<body>
	
	<@ navbar.php @>
