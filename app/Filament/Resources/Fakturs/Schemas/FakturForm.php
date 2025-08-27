<?php

namespace App\Filament\Resources\Fakturs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

use function Laravel\Prompts\select;

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
                Repeater::make('detail')
                    ->relationship()
                    ->schema([
                        select::make('barang_id')
                            ->relationship('barang', 'nama_barang'),
                        TextInput::make('diskon')
                            ->numeric(),
                        TextInput::make('nama_barang'),
                        TextInput::make('harga')
                            ->numeric(),
                        TextInput::make('subtotal')
                            ->numeric(),
                        TextInput::make('qty')
                            ->numeric(),
                        TextInput::make('hasil_qty')
                            ->numeric(),
                    ]),
                TextInput::make('ket_faktur')
                    ->label("Keterangan Faktur")
                    ->placeholder("Masukkan Keterangan Faktur..."),
                TextInput::make('total')
                    ->label("Total")
                    ->placeholder("Masukkan Total..."),
                TextInput::make('nominal_charge')
                    ->label("Nominal Charge")
                    ->placeholder("Masukkan Nominal Charge..."),
                TextInput::make('charge')
                    ->label("Charge")
                    ->placeholder("Masukkan Charge..."),
                TextInput::make('total_final')
                    ->label("Total Final")
                    ->placeholder("Masukkan Total Final..."),

            ]);
    }
}
