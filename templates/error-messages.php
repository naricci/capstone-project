<?php if ( isset($errors) && is_array($errors) ) : ?>
<ul>
    <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>