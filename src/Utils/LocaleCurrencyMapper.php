<?php

namespace App\Utils;

/**
 * Class LocaleCurrencyMapper
 */
class LocaleCurrencyMapper
{
    private const MAP = [
        'en' => 'USD',
        'pl' => 'PLN',
    ];

    /**
     * @param string $locale
     *
     * @return string|null
     */
    public function getCurrency(string $locale): ?string
    {
        if (isset(self::MAP[$locale])) {
            return self::MAP[$locale];
        }

        return null;
    }

    /**
     * @param string $currency
     *
     * @return string|null
     */
    public function getLocale(string $currency): ?string
    {
        return array_search($currency, self::MAP);
    }
}
