<?php
// components/buttons/accentbutton.php
// expects: $label (text), $href (link)
?>
<a href="<?= $href ?>" class="accent"><?= $label ?></a>

<style>
    .accent {
        background: #483030ff;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: background 0.3s;
    }

    .accent:hover {
        background: #221e1eff;
    }
</style>