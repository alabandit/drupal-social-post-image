<?php

namespace Drupal\social_post_image\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'social_post_image_social_post_image_table' formatter.
 *
 * @FieldFormatter(
 *   id = "social_post_image_social_post_image_table",
 *   label = @Translation("Table"),
 *   field_types = {"social_post_image_social_post_image"}
 * )
 */
class SocialPostImageTableFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $header[] = '#';
    $header[] = $this->t('Value 1');
    $header[] = $this->t('Value 2');
    $header[] = $this->t('Value 3');

    $table = [
      '#type' => 'table',
      '#header' => $header,
    ];

    foreach ($items as $delta => $item) {
      $row = [];

      $row[]['#markup'] = $delta + 1;

      $row[]['#markup'] = $item->value_1;

      $row[]['#markup'] = $item->value_2;

      $row[]['#markup'] = $item->value_3;

      $table[$delta] = $row;
    }

    return [$table];
  }

}
