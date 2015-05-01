<?# PARSE VARS
$links = $page->links()->yaml();
if ($links?true:false) :
?>
<small class="grid-12 card">
	<strong class="d-ib gutter-bottom">Project Links:</strong>
	<div class="project-links">
		<? foreach ($links as $link) : ?>

			<?# GENERATE HTML
			$wrap = brick('a',false,array(
				"href" => $link['url'],
				"class" => "project-link grid-12 gutter gutter-top gutter-bottom",
				'style'=>"margin-bottom:.5em;border:1px solid #DDD;border-radius:2px;"
			));
			$icn = brick("span",false,array(
				'class'=> 'iconic d-ib va-m',
				'data-glyph'=>'link-intact',
				'style'=>"margin-right:.25em;"
			));
			$txt = brick("span",$link['title'],array(
				'class'=> 'd-ib va-m'
			));
			$ttl = brick('strong',false,array(
				'class' => 'd-b',
				'style'=>"margin-bottom:.125em;"
			))->append($icn)->append($txt);
			$sub = brick('small',$link['sub'],array(
				'style'=>"font-size:.85em !important;"
			));
			$link_html = $wrap->append($ttl)->append($sub);
			?>

			<?=$link_html?>

		<? endforeach; ?>
	</div>
</small>
<? endif; ?>