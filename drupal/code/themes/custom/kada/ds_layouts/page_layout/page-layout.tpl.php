<?php

/**
 * @file
 * Page layout template
 */

if (!empty($sidebar || $additional_information) && $variables['is_front'] != true) {
    $additional_classes="page--has-sidebar";
}
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> <?php print $additional_classes;?>">

<?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>

<<?php print $main_content_wrapper ?> class="page__content <?php print $main_content_classes; ?>">
    <?php print $main_content; ?>
</<?php print $main_content_wrapper ?>>

<?php if (!empty($sidebar || $additional_information) && $variables['is_front'] != true): ?>
  <<?php print $sidebar_wrapper ?> class="page__sidebar <?php print $sidebar_classes; ?>">
    <?php print $sidebar; ?>
    <?php if (!empty($additional_information)): ?>
      <div class="page__additional-information">
        <h3 class="page__additional-information__header"><?php print t('Additional information') . ':'; ?></h3>
        <?php print $additional_information ?>
      </div>
    <?php endif; ?>
  </<?php print $sidebar_wrapper ?>>
<?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($after_content)): ?>
    <<?php print $after_content_wrapper ?> class="page__after-content <?php print $after_content_classes; ?>">
  <?php print $after_content; ?>
    </<?php print $after_content_wrapper ?>>
<?php endif; ?>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
