<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Laravel\Prompts\SearchPrompt;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_customer')
                    ->required()
                    ->label("Nama")
                    ->placeholder("Masukkan Nama Customer..."),
                TextInput::make('kode_customer')
                    ->required()
                    ->label("Kode")
                    ->placeholder("Masukkan Kode Customer..."),
                TextInput::make('alamat_customer')
                    ->required()
                    ->label("Alamat")
                    ->placeholder("Masukkan Alamat Customer..."),
                TextInput::make('telepon_customer')
                    ->required()
                    ->label("Telepon")
                    ->numeric()
                    ->placeholder("Masukkan Nomor Telepon..."),
            ]);
    }
}
