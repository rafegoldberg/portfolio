<?php if(!defined('KIRBY')) exit ?>

title: Document
pages: true
files:
	sortable: true
fields:
	title:
		label: Title
		type:  text
	text:
		label: Text
		type:  textarea
	_sep1:
		type: line
	_status:
		label: Document Status
		type: info
	status:
		type:  select
		options:
			required: Required
			editing: Editing
			locked: Locked