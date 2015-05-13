<?snippet('top',array(
	"css"  => 'client-single',
	'body' => 'grid parent grid-12',
))?>

<?snippet('header')?>
<?snippet('sidebar.client')?>

<main>
	<?=$page->text()->kirbytext()?>
</main>

<?snippet('footer')?>

<?snippet('bottom')?>