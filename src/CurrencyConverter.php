<?php

namespace App;

class CurrencyConverter
{
    private array $rates;

    public function __construct(array $rates)
    {
        $this->rates = $rates;
    }

    /**
     * Convertit un montant d'une devise à une autre.
     *
     * @param float $amount Montant à convertir
     * @param string $from Devise source (ex : 'EUR')
     * @param string $to Devise cible (ex : 'USD')
     *
     * @return float Montant converti arrondi à 2 décimales
     *
     * @throws \InvalidArgumentException Si une devise n'est pas supportée
     */
    public function convert(float $amount, string $from, string $to): float
    {
        if (!isset($this->rates[$from])) {
            throw new \InvalidArgumentException("Devise source inconnue: $from");
        }
        if (!isset($this->rates[$to])) {
            throw new \InvalidArgumentException("Devise cible inconnue: $to");
        }

        $amountInEuro = $amount / $this->rates[$from];
        $converted = $amountInEuro * $this->rates[$to];

        return round($converted, 2);
    }
}
