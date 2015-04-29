<? 
field::$methods['renderAround'] = function($field,$img) {
	$img_name = $img->filename();
	$img_src  = $img->url();

	$wrap = brick('figure',false,array(
		"data-bgi"=>$img_name
	))->addClass('grid-12 parent');

		$capt = brick('figcaption',kirbytext( $img->caption_text() ));
		 $bgi = brick('style',"[data-bgi='$img_name']{background-image:url($img_src);}");

	return $wrap->append($capt)->append($bgi);
};