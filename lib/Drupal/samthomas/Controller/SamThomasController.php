<?php

/**
 * @file
 * Contains \Drupal\samthomas\Controller\SamThomasController.
 */

namespace Drupal\samthomas\Controller;

/**
 * Controller routines for hello page routes.
 */
class SamThomasController {
  public function description() {
    return array(
      '#markup' => t('<p>Test!</p>'),
    );
  }
}
