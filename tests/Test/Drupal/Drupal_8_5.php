<?php

namespace Test\Drupal;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Drupal_8_5 extends Analyzer {
    /* 1 methods */

    public function testDrupal_8_501()  { $this->generic_test('Drupal/Drupal_8_5.01'); }
}
?>