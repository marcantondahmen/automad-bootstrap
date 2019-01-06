<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<@ set {
		metaTitle: "@{ sitename } / @{ title }"
	} @>
    <title>@{ metaTitle | stripTags }</title>
	<@ Automad/MetaTags {
		description: @{ textTeaser | stripTags },
		ogTitle: @{ metaTitle | stripTags },
		ogDescription: @{ textTeaser | stripTags },
		ogImage: @{ ogImage }
	} @>
	<@ with @{ favicon } @><link href="@{ :file }" rel="shortcut icon" type="image/x-icon" /><@ end @>
	<@ with @{ appleTouchIcon } @><link href="@{ :file }" rel="apple-touch-icon" /><@ end @>
	<link rel="stylesheet" href="@{ bootstrapCss | def ('/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }" />
	@{ itemsHeader }
</head>

<body>
	
	<@ navbar.php @>
