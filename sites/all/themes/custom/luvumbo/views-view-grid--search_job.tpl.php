<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<table class="<?php print $class; ?>"<?php print $attributes; ?>>
    <?php if (!empty($caption)) : ?>
        <caption><?php print $caption; ?></caption>
    <?php endif; ?>

    <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
        <tr <?php if ($row_classes[$row_number]):?> class="<?php print $row_classes[$row_number]; ?>"<?php endif; ?>>
            <?php foreach ($columns as $column_number => $item): ?>
                <td <?php if ($column_classes[$row_number][$column_number]): ?> class="<?php print $column_classes[$row_number][$column_number]; ?>"<?php endif; ?>>
                    <div class="content">
                        <?php print $item; ?>
                    </div>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
