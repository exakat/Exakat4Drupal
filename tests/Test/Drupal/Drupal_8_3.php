<?php

namespace Test\Drupal;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Drupal_8_3 extends Analyzer {
    /* 1 methods */

    public function testDrupal_8_301()  { $this->generic_test('Drupal/Drupal_8_3.01'); }
}
?>