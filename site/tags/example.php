<?

kirbytext::$tags['test'] = array(
	'attr' => array(
		'text',
		'grid',
		'class'
	),
	'html' => function($tag) {

		$grids = get_stately_classes(explode(' ',$tag->attr('grid')));
		$class = explode(' ',$tag->attr('class', ''));

		$text = $tag->attr('text', 'Wikipedia');

		// compound classes
		$class = implode(' ',array_merge($class,$grids));

		return "<a class='$class'>" . $text . "</a>";

	}
);