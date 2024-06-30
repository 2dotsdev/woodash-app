<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class StoreSettings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string $view = 'filament.pages.store-settings';

    protected static ?string $navigationLabel = 'Store Settings';

    protected static ?string $slug = 'store-settings';

    protected static ?int $navigationSort = 2;  // Adjust the sort order as needed
}
