<?php $quotes = get_field('quotes', 'options'); ?>
<div
    id="jer_sidebar_quote"
    class='cycle-slideshow'
    data-cycle-slides="h2"
>
    <?php foreach ($quotes as $quote): ?>
        <h2><?php print $quote['quote']; ?></h2>
    <?php endforeach; ?>
</div>