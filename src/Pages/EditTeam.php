<?php

namespace Filament\Jetstream\Pages;

use Filament\Facades\Filament;
use Filament\Pages\Tenancy\EditTenantProfile;

class EditTeam extends EditTenantProfile
{
    protected static string $view = 'filament-jetstream::pages.edit-team';

    protected static ?int $navigationSort = 2;

    public static function getLabel(): string
    {
        return __('Team Settings');
    }
}
