<?php

namespace Test\Drupal;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Drupal_7_10 extends Analyzer {
    /* 1 methods */

    public function testDrupal_7_1001()  { $this->generic_test('Drupal/Drupal_7_10.01'); }
}
?>