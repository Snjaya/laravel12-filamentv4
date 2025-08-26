<?php

namespace App\Filament\Resources\Fakturs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FakturForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_faktur')
                    ->required()
                    ->label("Kode Faktur")
                    ->placeholder("Masukkan Kode Faktur..."),
                DatePicker::make('tanggal_faktur'),
                TextInput::make('kode_customer')
                    ->required()
                    ->label("Kode Customer")
                    ->placeholder("Masukkan Kode Customer..."),
                Select::make('customer_id')
                    ->relationship('customer', 'nama_customer'),
                TextInput::make('ket_faktur')
                    ->label("Keterangan Faktur")
                    ->placeholder("Masukkan Keterangan Faktur..."),
                TextInput::make('total')
                    ->required()
                    ->label("Total")
                    ->placeholder("Masukkan Total..."),
                TextInput::make('nominal_charge')
                    ->required()
                    ->label("Nominal Charge")
                    ->placeholder("Masukkan Nominal Charge..."),
                TextInput::make('charge')
                    ->required()
                    ->label("Charge")
                    ->placeholder("Masukkan Charge..."),
                TextInput::make('total_final')
                    ->required()
                    ->label("Total Final")
                    ->placeholder("Masukkan Total Final..."),

            ]);
    }
}
