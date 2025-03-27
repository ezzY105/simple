<?php

namespace App\Filament\Resources\CartitemResource\Pages;

use App\Filament\Resources\CartitemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCartitem extends EditRecord
{
    protected static string $resource = CartitemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
