<table class="table table-striped">
<?php if( have_rows('profile') ): ?>
    <?php while ( have_rows('profile') ) : the_row(); ?>
        <?php if( get_sub_field('item') ):?>
            <tr>
                <th nowrap><?php the_sub_field('item'); ?></th>
                <td><?php the_sub_field('content'); ?></td>
            </tr>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</table>