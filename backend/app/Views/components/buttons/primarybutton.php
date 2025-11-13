<?php
$href = $href ?? null;
$label = $label ?? 'Button';
$type = $type ?? 'link'; // can be 'link' or 'submit'
?>

<?php if ($type === 'submit'): ?>
    <button type="submit" class="btn"><?= esc($label) ?></button>
<?php else: ?>
    <a href="<?= esc($href) ?>" class="btn"><?= esc($label) ?></a>
<?php endif; ?>

<style>
    .btn {
        background: #cfb8b8ff;
        color: black;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn:hover {
        background: #281a1aff;
        color: burlywood;
    }
</style>