<div class="PageTwoColumns u-cf">
  <?php if (!empty($content['sidebar'])): ?>
    <aside class="PageTwoColumns-region PageTwoColumns-region--sidebar">
      <div class="PageTwoColumns-inner">
        <?php print render($content['sidebar']);?>
      </div>
    </aside>
  <?php endif;?>

  <?php if (!empty($content['main'])): ?>
    <div class="PageTwoColumns-region PageTwoColumns-region--main">
      <div class="PageTwoColumns-inner">
        <?php print render($content['main']);?>
      </div>
    </div>
  <?php endif;?>
</div>