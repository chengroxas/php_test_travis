<?php
namespace tests;
use PHPUnit\Framework\TestCase;


class IndexTest extends TestCase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function testIndex()
    {
        $src_path = realpath(__DIR__ . '/../') . '/src/';
        $index = $src_path . 'index.php';
        $value = require_once $index;
        $this->assertStringContainsString('hello world', $value);
    }
}
