<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@{ 	textTeaser | 
	replace (
		'/(!\\[[^\\]]*]\\([^\\)]*\\))/i',
		'$1 {.img-fluid .rounded}'
	) |
	markdown 
}