<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
	sortable: true
	fields:
		caption_text:
			label: <h1 style="font-size:1.5em;margin-top:1.5em;padding-bottom:.625em;font-weight:900;">Caption</h1> <span style="font-weight:normal;color:#AAA;">Add some text and set the caption's position</span>
			type: textarea
		caption_position:
			type: select
			required: true
			options:
				top   : Above the image
				left  : Left of image
				right : Right of image
				bottom: Below the image
				center: Overlayed on image
		bgz:
			label: <h1 style="font-size:1.5em;margin-top:1.5em;padding-bottom:.625em;font-weight:900;">Background</h1> Scale
			type: radio
			required: true
			options:
				fit:  Fit
				fill: Fill
		bgpx:
			label: Align
			required: true
			type: select
			width: 1/2
			default: center
			options: 
				right:  Right
				center:  Center
				left:  Left
		bgpy:
			label: &nbsp;
			required: true
			default: center
			type: select
			width: 1/2
			options: 
				top:    Top
				center: Middle
				bottom: Bottom
		apply_view:
			label: <h1 style="font-size:1.5em;margin-top:1.5em;padding-bottom:.625em;font-weight:900;">Apply Options</h1> Apply to View
			type: checkboxes
			options: tablet mobile
				desktop: Desktop
				tablet: Tablet
				mobile: Mobile-
		invert:
			label: Inversion
			icon: yin-yang
			type: checkboxes
			default: bgz
			options:
				bgz: Background Scale
				colors: Project Theme
		_details-line8:
			type: line
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
	links:
		label: &nbsp;
		type: structure
		entry: >
			<div>
				<strong>{{title}}</strong><br />
				<small>{{sub}}</small>
			</div>
			<hr style="margin: .5em 0; height: 1px;">
			<small style="display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{url}}</small>
		fields:
			title:
				label: Text
				type: text
			sub:
				label: Subtext
				type: text
			url:
				label: Link
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