<?php

namespace Test\Drupal;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Drupal_8_4 extends Analyzer {
    /* 1 methods */

    public function testDrupal_8_401()  { $this->generic_test('Drupal/Drupal_8_4.01'); }
}
?>