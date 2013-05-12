<li class="search-result <?php echo $classes;?>">
  <h3 class="title"><a href="<?php print $url; ?>"><?php print $title; ?></a>

  </h3>
  <?php if ($snippet or $info_split): ?>
    <div class="search-snippet-info">
      <?php if ($snippet) : ?>
        <div class="search-snippet"><?php print $snippet; ?></div>
      <?php endif; ?>

      <?php if ($info_split) : ?>
        <div class="search-info">
          <?php if (isset($info_split['date'])) : ?>
            <span class="search-info-date">Updated:
              <?php print format_date($result['node']->changed,"custom","M j, Y"); ?>
            </span>
            <?php $separator = $info_separator; ?>
          <?php endif; ?>
          <span class="search-info-type">Type: <?php print $info_split['type']; ?></span>
          <div class="pull-right">
            <?php if (isset($info_split['comment'])) : ?>
              <span class="search-info-comment"><?php print $separator . $info_split['comment']; ?></span>
              <?php $separator = $info_separator; ?>
            <?php endif; ?>

            <?php if (isset($info_split['upload'])) : ?>
              <span class="search-info-upload"><?php print $separator . $info_split['upload']; ?></span>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</li>
