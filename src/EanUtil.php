<?php

namespace CelsoNery\PhpEanUtils;

use \Exception;

class EanUtil
{
    public function __construct(
        private string $ean
    )
    {
    }

    public function isValid(): bool|string
    {
        try {
            if (strlen($this->ean) < 8 || ((strlen($this->ean) > 8) && (strlen($this->ean) < 13))) {
                throw new \Exception('O código EAN informado é inválido!');
            }

            $digits = str_split($this->ean);
            $result = 0;
            $dv = array_pop($digits);
            $odd = 0;
            $even = 0;

            foreach ($digits as $digit) {
                if ($digit != 0) {
                    $odd += ($digit % 2 != 0) ? $digit : 0;
                    $even += ($digit % 2 == 0) ? $digit : 0;
                }
            }

            $result = $odd + $even * 3;
            $checkSum = 10 - $result % 10;

            return $checkSum == $dv;

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function fake(): string
    {
        return "7894561230123";
    }

    private function fixLen(): string
    {
        if (strlen($this->ean) < 8) {
            $this->ean = $this->toEight();
        } elseif (strlen($this->ean) > 8 && strlen($this->ean) < 13) {
            $this->ean = $this->toThirteen();
        }

        return $this->ean;
    }
    private function toEight(): string
    {
        return str_pad($this->ean, 8, '0', STR_PAD_LEFT);
    }

    private function toThirteen(): string
    {
        return str_pad($this->ean, 13, '0', STR_PAD_LEFT);
    }
}
