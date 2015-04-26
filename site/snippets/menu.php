<nav role="navigation">

  <ul class="menu cf">
    <? foreach($pages->visible() as $p): ?>
    <li>
      <a <? e($p->isOpen(), ' class="active"') ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>

      <? if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <? foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>
        </li>
        <? endforeach ?>
      </ul>
      <? endif ?>

    </li>
    <? endforeach ?>
  </ul>

</nav>
