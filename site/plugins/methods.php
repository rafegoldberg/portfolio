<?
/////////////////////////////////
// DEBUG                       //
/////////////////////////////////

function jsl($arr,$tag=false,$styles=false){
	if ($tag) {
		echo "<script class='php2js'>console.log('".$tag."',".json_encode($arr).")</script>";
	} else {
		echo "<script class='php2js'>console.log(".json_encode($arr).")</script>";
	}
}

/////////////////////////////////
// FIELD METHODS               //
/////////////////////////////////

function get_stately_classes ($arr){
	return array_map(function($v, $k) {
		if     ($k==0) { return "grid-$v"; }
		elseif ($k==1) { return "grid-tablet-$v"; }
		else           { return "grid-mobile-$v"; }
	}, $arr, array_keys($arr));;
}

/////////////////////////////////
// FIELD METHODS               //
/////////////////////////////////

field::$methods['list'] = function($field,$layout=false) {
	$layout = !$layout ? 'list' : implode(' ',array_map(function($n){
		return "list_$n";
	},split(' ',$layout)));
	$items = implode('',array_map(function($n){
		return "<li class='list--item'>$n</li>";
	},split(',',$field->value)));
	return "<ul class='$layout'>$items</ul>";
};
?>