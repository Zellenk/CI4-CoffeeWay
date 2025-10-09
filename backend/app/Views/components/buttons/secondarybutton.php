<?php
// components/buttons/secondarybutton.php
// expects: $label (text), $href (link)
?>

<a href="<?= $href ?>" class="secondary"><span><?= $label ?></span></a>
<style>
    .secondary {
        background-color: #3b2f2f;
        /* Default background */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .secondary span {
        color: #ffffffff;
        /* Default text color */
        transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
    }

    .secondary:hover span {
        color: #95c8ffff;
        /* Text color on hover */
    }
</style>