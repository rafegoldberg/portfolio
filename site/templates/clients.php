<?
if (!$site->user()) go('/') #PROTECT PAGE
?>
<?snippet('top',array(
	'css'=>'clients-feed',
	'body'=>'grid parent grid-12',
))?>

<header class="card">
	<h1><?=$page->title()->html()?></h1>
	<aside class="small">Feed</aside>
</header>

<ul class="soft--links list_sep-slash m-t-none">
<? foreach($page->children()->visible() as $client): ?>
	<li class="list--item">
		<a id="client-<?=$client->slug()?>" href="<?=$client->url()?>" class="d-b">
			<header class="header">
				<strong><?=$client->title()->html()?></strong>
				<small class="aside"></small>
			</header>
		</a>
	</li>
<? endforeach ?>
</ul>

<?snippet('bottom')?>