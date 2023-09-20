<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
            Action::make("changePassword")
                ->form([
                    TextInput::make("new_password")
                        ->password()
                        ->label("New password")
                        ->required()
                        ->rule(\Illuminate\Validation\Rules\Password::default()),
                    TextInput::make("new_password_confirmation")
                        ->password()
                        ->label("confirm password")
                        ->required()
                        ->same("new_password")
                        ->rule(\Illuminate\Validation\Rules\Password::default())
                ])
                ->action(function (array $data) {
                    $this->record->update([
                        'password' => Hash::make($data['new_password'])
                    ]);
                    
                    Notification::make()->title("Password update successfully")->success()->send();
                })
        ];
    }

}
