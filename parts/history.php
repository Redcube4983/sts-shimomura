<div class="history-area">

<?php if ( have_rows('history') ): ?>

<?php
$current_decade = null;
$first = true;
?>

<?php while ( have_rows('history') ): the_row(); ?>

<?php
$year = (int) get_sub_field('year');
$text = get_sub_field('text');
$decade = floor($year / 10) * 10;
?>

<?php
// decadeが変わったら新しいブロックを開始
if ( $decade !== $current_decade ) :

    // 最初以外は閉じタグを出す
    if ( ! $first ) :
?>
        </div><!-- /.history-item-area -->
    </div><!-- /.history-inner -->
<?php
    endif;
?>

    <div class="history-inner">
        <div class="history-decade">
            <span class="jost-600"><?php echo esc_html($decade); ?></span>
        </div>
        <div class="history-item-area">

<?php
    $current_decade = $decade;
    $first = false;
endif;
?>

            <div class="history-item">
                <div class="history-year"><?php echo esc_html($year); ?>年</div>
                <div class="history-text"><?php echo $text; ?></div>
            </div>

<?php endwhile; ?>

        </div><!-- /.history-item-area -->
    </div><!-- /.history-inner -->

<?php endif; ?>
</div>
