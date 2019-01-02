<?php

namespace Test\Drupal;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Drupal_8_6 extends Analyzer {
    /* 1 methods */

    public function testDrupal_8_601()  { $this->generic_test('Drupal/Drupal_8_6.01'); }
}
?>