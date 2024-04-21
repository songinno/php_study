<?php $var = 5; ?>

<?php if ($var > 6): ?>
    <div>변수의 값은 6보다 큽니다.</div>
<?php elseif ($var === 6) : ?>
    <div>변수의 값은 6입니다.</div>
<?php else : ?>
    <div>변수의 값은 6보다 작습니다.</div>
<?php endif; ?>