

#### Headline Box

```php
<div class="box--content box_text">
	<<?=$tag?> class="box--content--headline <?=$headline_class?>">
		<?=$headline?>
	</<?=$tag?>>
</div>
```

#### Text Box

```php
<div class="box--content box_text">
	<div class="box--content--text <?=$text_class?>">
		<?=$text?>
	</div>
</div>
```

#### List Box

```php
<div class="box--content box_list">
	<<?=$tag?> class="box--content--list <?=$list_class?>">
		<?=$text?>
	</<?=$tag?>>
</div>
```

#### Integer Box

```php
<div class="box--content box_int">
	<figure class="box--content--int"><?=$integer?></figure>
</div>
```

#### Media Box

```php
<div class="box--content box_media">
	<img src="<?=$media_src?>" class="box--content--media" />
</div>
```

#### iFrame Box

```php
<div class="box--content box_media box_iframe">
	<?= $iframe_tag ?>
</div>
```

#### Video Box

```php
<div class="box--content box_media box_video">
	<? call_user_func($source,$url) ?>
</div>
```