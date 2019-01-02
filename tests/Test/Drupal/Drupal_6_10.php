<?php

namespace Test\Drupal;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Drupal_6_10 extends Analyzer {
    /* 1 methods */

    public function testDrupal_6_1001()  { $this->generic_test('Drupal/Drupal_6_10.01'); }
}
?>