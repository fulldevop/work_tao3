<?php

return tao_cfg('tao', [
	'datatypes' => [
		'pages' => \TAO\ORM\Model\Page::class,
		'photos' => \App\Model\Photo::class,
		'main_slides' => \App\Model\MainSlides::class,
	],
]);
