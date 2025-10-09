<?php
// components/buttons/disabledbutton.php
// expects: $label (text)
?>

<a href="javascript:void(0)" class="disabled"><?= $label ?></a>

<style>
    .disabled {
        background: #ddd;
        color: #999;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        text-decoration: none;
        display: inline-block;
        cursor: not-allowed;
    }
</style>