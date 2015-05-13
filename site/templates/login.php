<? snippet('top') ?>
    <? snippet('header') ?>
    <? snippet('sidebar.default') ?>
    <? if($error): ?>
        <div class="alert"><?= $page->alert()->html() ?></div>
    <? endif ?>
    <main>
        <form method="post">
            <div>
                <label for="username"><?= $page->username()->html() ?></label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password"><?= $page->password()->html() ?></label>
                <input type="password" id="password" name="password">
            </div>
            <div>      
                <input type="submit" name="login" value="<?= $page->button()->html() ?>">
            </div>
        </form>
    </main>

    <? snippet('footer') ?>
<? snippet('bottom') ?>