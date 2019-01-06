<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@{ 	text | 
	replace (
		'/(!\\[[^\\]]*]\\([^\\)]*\\))/i',
		'$1 {.img-fluid .rounded}'
	) |
	markdown 
}