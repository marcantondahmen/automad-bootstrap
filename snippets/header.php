<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!doctype html>
<html lang="en">
<head>
	<?php if (substr(AM_VERSION, 0, 1) == '1') { ?>
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
	<?php } ?>
	<@ with @{ favicon } @><link href="@{ :file }" rel="shortcut icon" type="image/x-icon" /><@ end @>
	<@ with @{ appleTouchIcon } @><link href="@{ :file }" rel="apple-touch-icon" /><@ end @>
	<link rel="stylesheet" href="@{ bootstrapCss | def ('/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }" />
	@{ itemsHeader }
</head>

<body>
	
	<@ navbar.php @>
