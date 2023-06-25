<?php

namespace CelsoNery\EanUtils\Services\Traits;

/**
 * This is a Traits to Validate a EAN/GTIN
 */
trait EanUtil
{
    /**
     * Start Method to validate EAN/GTIN
     *
     * @param string $ean
     * @return bool
     */
    public function isValid(string $ean): bool
    {
        if (strlen($ean) < 8 || ((strlen($ean) > 8) && (strlen($ean) < 13))) {
            return false;
        }

        return (strlen($ean) == 8) ? $this->isValidEight($ean) : $this->isValidThirteen($ean);
    }

    /**
     * Method to validate EAN/GTIN 13
     *
     * @param string $ean
     * @return bool
     */
    private function isValidThirteen(string $ean): bool
    {
        $digits = str_split($ean);
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
    }

    /**
     * Method to validate EAN/GTIN 8
     *
     * @param string $ean
     * @return bool
     */
    private function isValidEight(string $ean): bool
    {
        // TODO: Generate method to verify if ean8 is Valid
        return false;
    }

    /**
     * Method to generate EAN/GTIN 8 fake
     *
     * @return string
     */
    public function fakeEan8(): string
    {
        // TODO: Generate method to return a Ean8 fake
        return '';
    }

    /**
     * Method to generate EAN/GTIN 13 fake
     *
     * @return string
     */
    public function fakeEan13(): string
    {
        // TODO: Generate mehod to return a Ean13 fake
        return '';
    }

    /**
     * Method to fix length EAN/GTIN and complete with 0
     *
     * @param string $ean
     * @return string
     */
    protected function fixLen(string $ean): string
    {
        if (strlen($ean) < 8) {
            return $this->toEight($ean);
        } elseif (strlen($ean) > 8 && strlen($ean) < 13) {
            return $this->toThirteen($ean);
        } else {
            return '';
        }
    }

    /**
     * Method to fix length EAN/GTIN 8 and complete with 0
     *
     * @param string $ean
     * @return string
     */
    private function toEight(string $ean): string
    {
        return str_pad($ean, 8, '0', STR_PAD_LEFT);
    }

    /**
     * Method to fix length EAN/GTIN 13 and complete with 0
     *
     * @param string $ean
     * @return string
     */
    private function toThirteen(string $ean): string
    {
        return str_pad($ean, 13, '0', STR_PAD_LEFT);
    }
}
