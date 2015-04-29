<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
	title:
		label: Title
		type:  text
	sidebar:
		label: Excerpt
		type: textarea
	limit:
		label: Project Previews
		min:   3
		max:   9
		type:  number
		size:  large