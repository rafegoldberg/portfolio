<? 
field::$methods['renderAround'] = function($field,$img) {
	// 
	// PARSE VARS
	// 
	//-> Image
	// 
	$img_name = $img->filename();
	$img_src  = $img->url();
	$img_bgz  = 'bgz-'.$img->bgz();
	$GLOBALS['bgp-pre'] = 'bgp-'.$img->bgpx().'-'.$img->bgpy().'-';
	$img_bgp  = implode( ' ', array_map(function($v){

		return $GLOBALS['bgp-pre'].trim($v);
		
	}, explode(',',$img->apply_view())) );

	//-> Caption
	// 
	$capt_pos =$img->caption_position();

	// 
	// GENERATE HTML
	// 
	$wrap = brick('figure',false,array(
		"class"    => "figure $img_bgz $img_bgp",
		"data-bgi" => $img_name
	))->addClass('grid-12 parent');
	$capt = brick('figcaption', kirbytext($field->value), array(
		'class' => "figure--caption figure--caption_$capt_pos"
	));
	$bgi  = brick('style',"[data-bgi='$img_name']{background-image:url($img_src);}");

	return $wrap->append($capt)->append($bgi);
};