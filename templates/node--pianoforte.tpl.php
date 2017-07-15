<?php

$entity = current(entity_load('node', array($nid))); ?>
<article>

  <?php print $title; ?>
  <?php print render($content['body']); ?>

  <!-- label -->
  <div style="background: #eee">
    <select id="color-selector" >
    <?php

      if(!empty($entity->field_colore['und'])) {
        foreach($entity->field_colore['und'] as $lbl) {
          $label = entity_load('field_collection_item', array($lbl['value']));
          ?>
          <option value="fazioli-gal-img-<?php print_r($label[$lbl['value']]->item_id); ?>">
            <?php echo $label[$lbl['value']]->field_label['und'][0]['value']; ?>
          </option>

          <?php
        }
      }

    ?>
    </select>
  </div>

  <!-- label -->
  <div style="background: #eee">
    <select id="finitura-selector">
    <?php

      if(!empty($entity->field_finitura['und'])) {
        foreach($entity->field_finitura['und'] as $lbl) {
          $label = entity_load('field_collection_item', array($lbl['value']));
          ?>
          <option value="fazioli-gal-img-<?php print_r($label[$lbl['value']]->item_id); ?>">
            <?php echo $label[$lbl['value']]->field_label['und'][0]['value']; ?>
          </option>

          <?php
        }
      }

    ?>
    </select>
  </div>



  <!-- image -->
  <div id="gallery" style="background: #eee; margin-top: 40px;">
    <?php

      if(!empty($entity->field_colore['und'])) {
        foreach($entity->field_colore['und'] as $img) {
          $pianoimage = entity_load('field_collection_item', array($img['value']));
          $url = $pianoimage[$img['value']]->field_pianoimage['und'][0]['uri'];
          ?>
          <img class="fazioli-gal-img-<?php print_r($pianoimage[$img['value']]->item_id); ?>" src="<?php print image_style_url("medium", $url); ?>" />
          <?php
        }
      }

      if(!empty($entity->field_finitura['und'])) {
        foreach($entity->field_finitura['und'] as $img) {
          $pianoimage = entity_load('field_collection_item', array($img['value']));
          $url = $pianoimage[$img['value']]->field_pianoimage['und'][0]['uri'];

          ?>

          <img class="fazioli-gal-img-<?php print_r($pianoimage[$img['value']]->item_id); ?>" src="<?php print image_style_url("medium", $url); ?>" />

          <?php
        }
      }

    ?>
  </div>





</article>
