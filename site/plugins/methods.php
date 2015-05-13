<?
/////////////////////////////////
// DEBUG                       //
/////////////////////////////////

function jsl($arr=array('default'),$txt=false,$r=false){
	$logtag = false;
	if ($txt) {
		$logtag = "<script class='php2js'>console.log('".$txt."',".json_encode($arr).")</script>";
	} else {
		$logtag = "<script class='php2js'>console.log(".json_encode($arr).")</script>";
	}
	if ($r) { return $logtag; } else { echo $logtag; }
}

/////////////////////////////////
// FIELD METHODS               //
/////////////////////////////////

function get_user_timezone() {
	return getdate();
	return localtime(time(), true);
}

/////////////////////////////////
// FIELD METHODS               //
/////////////////////////////////


// function prepend_states ($arr,$delim=' ',$tostr=false){
// }

function get_stately_classes ($arr,$delim=' ',$tostr=false){
	$arr = gettype($arr)=='string'?explode($delim,$arr):$arr;
	$classes = array_map(function($v, $k) {
		if     ($k==0) { return "grid-$v"; }
		elseif ($k==1) { return "grid-tablet-$v"; }
		else           { return "grid-mobile-$v"; }
	}, $arr, array_keys($arr));
	return $tostr ? implode(' ',$classes) : $classes;
}

/////////////////////////////////
// FIELD METHODS               //
/////////////////////////////////

field::$methods['list'] = function($field,$layout=false,$delim=" ") {
	$layout = !$layout ? 'list' : implode($delim,array_map(function($n){
		return "list_$n";
	},split(' ',$layout)));
	$items = implode('',array_map(function($n){
		return "<li class='list--item'>$n</li>";
	},split(',',$field->value)));
	return "<ul class='$layout'>$items</ul>";
};

// kirbytext::$tags['tooltip:'] = array(
// 	'attr' => array(
// 		'show'
// 	),
// 	'html' => function($tag) {
// 		$text   = $tag->attr('tooltip');
// 		$tiptxt = $tag->attr('show','Tooltip');
// 		return "<a class='tooltip' title='$tiptxt'>$text</a>";
// 	}
// );
kirbytext::$tags['tooltip'] = array(
  'attr' => array(
    'show',
    'url'
  ),
  'html' => function($tag) {

    $text   = $tag->attr('tooltip');
    $tiptxt = $tag->attr('show', 'tooltip');
    $url   = $tag->attr('url',false) ? 'href="'.$tag->attr('url','').'"' : '';
    // $url   = "data-rafe";
    return "<a $url class='tooltip' title='$tiptxt'>$text</a>";
  }
);
?>