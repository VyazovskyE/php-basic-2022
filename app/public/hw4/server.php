<?php
$_POST;

foreach ($_POST as $name => $value): ?>

<div>
  <span><?= $name ?></span> - <span><?= $value ?></span>
</div>

<?php endforeach;?>
<hr>

<?php if (count($_FILES)): ?>
  <pre><? var_dump($_FILES) ?></pre>
<?php endif; ?>
