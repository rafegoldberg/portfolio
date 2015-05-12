<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
	title:
		label: Title
		type:  text
	subtitle:
		label: Subtitle
		type:  text
	author:
		label: Author
		type:  text
	description:
		label: Description
		type:  textarea
	keywords:
		label: Keywords
		type:  tags
	copyright:
		label: Copyright
		type:  textarea
	_detail-line1:
		type: line
	_detail-info_sands:
		type: info
		label: Search + Social
		text: >

			<p><small style="font-size:11pt;">Set your Twitter and Facebook usernames to link any shared content on these social networks to your profile as publisher. Add a default thumbnail to enrich search results and share previews of your content.</small></p>

		width: 1/2
	soc_twitter:
		label: &nbsp; <small style="font-size:11pt;opacity:.5;">Profiles</small>
		icon: twitter
		placeholder: Twitter @handle
		type: text
		width: 1/2
	soc_facebook:
		icon: facebook
		placeholder: Facebook page Insights ID
		type: text
		width: 1/2
	thumb:
		label: &nbsp; <small style="font-size:11pt;opacity:.5;">Thumbnail</small>
		type: select
		width: 1/2
		icon: picture-o
		options:
			img1: Image 1
			img2: Image 2
			img3: Image 3
			img4: Image 4
	_detail-line3:
		type: line