<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
	title:
		label: Title
		type:  text
	text:
		label: Text
		type:  textarea
		size:  large
	limit:
		label: Project Previews
		min:   3
		max:   9
		type:  number
		size:  large
	sidebar:
		label: Sidebar Snippet
		typeL textarea