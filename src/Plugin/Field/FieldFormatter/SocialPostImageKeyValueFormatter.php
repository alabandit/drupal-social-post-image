<?php

namespace Drupal\social_post_image\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'social_post_image_social_post_image_key_value' formatter.
 *
 * @FieldFormatter(
 *   id = "social_post_image_social_post_image_key_value",
 *   label = @Translation("Key-value"),
 *   field_types = {"social_post_image_social_post_image"}
 * )
 */
class SocialPostImageKeyValueFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $element = [];

    foreach ($items as $delta => $item) {

      $table = [
        '#type' => 'table',
      ];

      // Value 1.
      if ($item->value_1) {
        $table['#rows'][] = [
          'data' => [
            [
              'header' => TRUE,
              'data' => [
                '#markup' => $this->t('Value 1'),
              ],
            ],
            [
              'data' => [
                '#markup' => $item->value_1,
              ],
            ],
          ],
          'no_striping' => TRUE,
        ];
      }

      // Value 2.
      if ($item->value_2) {
        $table['#rows'][] = [
          'data' => [
            [
              'header' => TRUE,
              'data' => [
                '#markup' => $this->t('Value 2'),
              ],
            ],
            [
              'data' => [
                '#markup' => $item->value_2,
              ],
            ],
          ],
          'no_striping' => TRUE,
        ];
      }

      // Value 3.
      if ($item->value_3) {
        $table['#rows'][] = [
          'data' => [
            [
              'header' => TRUE,
              'data' => [
                '#markup' => $this->t('Value 3'),
              ],
            ],
            [
              'data' => [
                '#markup' => $item->value_3,
              ],
            ],
          ],
          'no_striping' => TRUE,
        ];
      }

      $element[$delta] = $table;

    }

    return $element;
  }

}
