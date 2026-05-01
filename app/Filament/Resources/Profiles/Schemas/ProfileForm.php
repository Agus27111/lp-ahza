<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('title'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                FileUpload::make('avatar')
                    ->image()
                    ->directory('profiles'),
                TextInput::make('linkedin_url')
                    ->label('LinkedIn URL')
                    ->url()
                    ->helperText('Pastikan diawali dengan https:// (contoh: https://www.linkedin.com/in/username)')
                    ->placeholder('https://www.linkedin.com/in/username'),
                TextInput::make('github_url')
                    ->label('GitHub URL')
                    ->url()
                    ->helperText('Pastikan diawali dengan https:// (contoh: https://github.com/username)')
                    ->placeholder('https://github.com/username'),
                TextInput::make('whatsapp_number')
                    ->label('WhatsApp Number')
                    ->helperText('Gunakan kode negara tanpa tanda + (contoh: 62878...)'),
                TagsInput::make('tech_stack')
                    ->columnSpanFull(),
            ]);
    }
}
