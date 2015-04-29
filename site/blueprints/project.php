<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
	sortable: true
	fields:
		caption_text:
			label: Description
			type: textarea
		caption_position:
			type: select
			options:
				top   : Above the Image
				left  : Left of image
				right : Right of image
				bottom: Below the image
		_line8:
			type: line
		bgz:
			label: Background Scale
			type: radio
			options:
				fit:  Fit
				fill: Fill
		bgpx:
			label: Background Align
			type: select
			width: 1/2
			options: 
				right:  Right
				center:  Center
				left:  Left
		bgpy:
			label: &nbsp;
			type: select
			width: 1/2
			options: 
				top:    Top
				center: Middle
				bottom: Bottom
		apply_view:
			label: Apply Options To:
			type: checkboxes
			options:
				desktop: Desktop
				tablet: Tablet
				mobile: Mobile
fields:
	project:
		label: Title
		type:  text
		placeholder: Project Title
		icon: folder-open
	text:
		label: Project Description
		type:  textarea
	_line6:
		type: line
	title:
		label: Client
		type:  text
		width: 1/2
		icon: user
	sidebar:
		label: Sidebar Snippet
		type: textarea
		width: 1/2
	_line5:
		type: line
	category:
		label: Project Category
		type: select
		default: web
		options:
			Web: Web / Digital
			Branding: Branding / Identity
			Graphics: Print / Graphics
		width: 1/4
	tags:
		label: Tags
		type:  tags
		width: 3/4
		fields:
	_line4:
		type: line
	_details_links:
		label: Links
		type: info
		text: >

			Add a couple of links to pages pertinent to this project. 
			of this project, and choose a featured image.

		width: 1/2
	link_1:
		label: &nbsp;
		type: URL
		width: 1/2
	link_2:
		type: URL
		width: 1/2
	_line1:
		type: line
	_details_dates:
		label: Dates
		type: info
		text: >

			Set the date of this project. (Or set a duration by adding an end date!)

		width: 1/2
	start_date:
		label: From
		type: date
		format: MM/YY
		width: 1/4
	end_date:
		label: To
		type: date
		format: MM/YY
		width: 1/4
	_line2:
		type: line
	_details_featured_image:
		label: Featured Image
		type: info
		text: >

			Choose a featured image for this project.

		width: 1/2
	bgi:
		label: &nbsp;
		type: select
		icon: picture-o
		options: images
		width: 1/2
	_line7:
		type: line
	_details_colors:
		label: Poject Theme
		type: info
		text: >

			Choose a foreground and background color.

		width: 1/2
	bg_color:
		label: &nbsp;
		type: text
		icon: eyedropper
		placeholder: Background Color (HEX)
		default: #FFF
		width: 1/2
	fg_color:
		label: &nbsp;
		type: text
		icon: eyedropper
		placeholder: Text Color (HEX)
		default: #000
		width: 1/2
	_line3:
		type: line