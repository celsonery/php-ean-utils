<?php

namespace Unit;

use CelsoNery\EanUtils\Services\Traits\EanUtil;
use PHPUnit\Framework\TestCase;

class EanUtilTest extends TestCase
{
    use EanUtil;

    public function testIfEanIsNotValid78912()
    {
        $this->assertFalse($this->isValid("78912"));
    }

    public function testIfEanIsNotValid7891200()
    {
        $this->assertFalse($this->isValid("7891200"));
    }

    public function testIfEanIsNotValidWith789121235()
    {
        $this->assertFalse($this->isValid("789121235"));
    }

    public function testIfEanIsNotValidWith7891278912()
    {
        $this->assertFalse($this->isValid("7891278912"));
    }

    public function testIfEanIsNotValidWith78912789122()
    {
        $this->assertFalse($this->isValid("78912789122"));
    }

    public function testIfEanIsNotValidWith789127891223()
    {
        $this->assertFalse($this->isValid("789127891223"));
    }

    public function testIfEanIsValid7898114289779()
    {
        $this->assertTrue($this->isValid("7898114289779"));
    }

    public function testIfEanIsChangedWithZeros78981()
    {
        $this->assertEquals("00078981", $this->fixLen("78981"));
    }

    public function testIfEanIsChangedWithZeros7898100()
    {
        $this->assertEquals("07898100", $this->fixLen("7898100"));
    }

    public function testIfEanIsChangedWithZeros789811428()
    {
        $this->assertEquals("0000789811428", $this->fixLen("789811428"));
    }

    public function testIfEanIsChangedWithZeros7898114289()
    {
        $this->assertEquals("0007898114289", $this->fixLen("7898114289"));
    }

    public function testIfEanIsChangedWithZeros78981142897()
    {
        $this->assertEquals("0078981142897", $this->fixLen("78981142897"));
    }

    public function testIfEanIsChangedWithZeros789811428977()
    {
        $this->assertEquals("0789811428977", $this->fixLen("789811428977"));
    }
}
