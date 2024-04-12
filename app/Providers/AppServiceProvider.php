<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::stringable(function(Money $money) {
          $currencies = new ISOCurrencies();
          $numberFormmater = new \NumberFormatter('en_GB', \NumberFormatter::CURRENCY);
          $moneyFormatter = new IntlMoneyFormatter($numberFormmater, $currencies);

          return $moneyFormatter->format($money);
        });
    }
}
