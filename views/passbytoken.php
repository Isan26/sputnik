<?php if ($model->errors) : ?>
    <ul>
        <?php foreach ($model->errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?= Html::beginForm('?action=passresset') ?>
<?= Html::activeHiddenInput($model, 'token') ?>
<?= Html::activeLabel($model, 'new') ?>
<br>
<?= Html::activePasswordInput($model, 'new') ?>
<br>
<?= Html::activeLabel($model, 're') ?>
<br>
<?= Html::activePasswordInput($model, 're') ?>
<br>
<?= Html::submitButton('Enviar') ?>
<?= Html::endForm(); ?>