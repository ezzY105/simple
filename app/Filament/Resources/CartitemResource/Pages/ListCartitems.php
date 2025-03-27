<?php

namespace App\Filament\Resources\CartitemResource\Pages;

use App\Filament\Resources\CartitemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCartitems extends ListRecords
{
    protected static string $resource = CartitemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
