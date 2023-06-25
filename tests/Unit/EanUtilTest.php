<?php

namespace Unit;

use PHPUnit\Framework\TestCase;

class EanUtilTest extends TestCase
{
    public function testIfEanIsNotValid78912()
    {
        $eanUtil = new EanUtil(ean: '78912');
        $this->assertFalse($eanUtil->isValid());
    }

    public function testIfEanIsNotValid7891200()
    {
        $eanUtil = new EanUtil(ean: '7891200');
        $this->assertFalse($eanUtil->isValid());
    }

    public function testIfEanIsNotValidWith789121235()
    {
        $eanUtil = new EanUtil(ean: '789121235');
        $this->assertFalse($eanUtil->isValid());
    }

    public function testIfEanIsNotValidWith7891278912()
    {
        $eanUtil = new EanUtil(ean: '7891278912');
        $this->assertFalse($eanUtil->isValid());
    }

    public function testIfEanIsNotValidWith78912789122()
    {
        $eanUtil = new EanUtil(ean: '78912789122');
        $this->assertFalse($eanUtil->isValid());
    }

    public function testIfEanIsNotValidWith789127891223()
    {
        $eanUtil = new EanUtil(ean: '789127891223');
        $this->assertFalse($eanUtil->isValid());
    }

    public function testIfEanIsValid7898114289779()
    {
        $eanUtil = new EanUtil(ean: '7898114289779');
        $this->assertTrue($eanUtil->isValid());
    }
}
