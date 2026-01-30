<div class="history">
<?php if ( have_rows('history') ): ?>
<div class="history-inner">
<?php $prev_decade = null;
    while ( have_rows('history') ): the_row();
    $year = (int) get_sub_field('year');
    $text = get_sub_field('text');

    // 10年単位（1940, 1950, 1960 ...）
    $decade = floor($year / 10) * 10;

    // 前回と年代が変わったら表示
    if ( $decade !== $prev_decade ) :
?>
    <div class="history-decade">
        <span><?php echo esc_html($decade); ?>年</span>
    </div>
<?php $prev_decade = $decade;
    endif;
?>
    <div class="history-item">
        <div class="history-year"><?php echo esc_html($year); ?>年</div>
        <div class="history-text"><?php echo nl2br(esc_html($text)); ?></div>
    </div>
<?php endwhile; ?>
</div>
<?php endif; ?>
</div>