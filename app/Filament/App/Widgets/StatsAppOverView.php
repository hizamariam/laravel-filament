<?php

namespace App\Filament\App\Widgets;

use App\Models\Employee;
use App\Models\Team;
use App\Models\User;
use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAppOverView extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', Team::find(Filament::getTenant())->first()->members->count())
            ->description('All users')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        Stat::make('Teams', Team::query()->count())
        // Stat::make('Teams', Team::query()->whereBelongsTo(Filament::getTenant())->count())
            ->description('All teams')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
        Stat::make('Employees', Employee::query()->count())
        // Stat::make('Employees', Employee::query()->whereBelongsTo(Filament::getTenant())->count())
            ->description('All employees')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        ];
    }
}
