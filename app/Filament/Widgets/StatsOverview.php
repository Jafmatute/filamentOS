<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Payments this month',
                Payment::where('created_at', '>', now()->subDay(30))->count()),
            Stat::make('Income this month', 'Lps ' .
                Payment::where('created_at', '>', now()->subDay(30))->sum('total')),
        ];
    }
}
