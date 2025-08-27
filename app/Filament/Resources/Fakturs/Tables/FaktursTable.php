<?php

namespace App\Filament\Resources\Fakturs\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class FaktursTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_faktur')
                    ->label("Kode Faktur"),
                TextColumn::make('tanggal_faktur'),
                TextColumn::make('kode_customer')
                    ->label("Kode Customer"),
                TextColumn::make('customer.nama_customer')
                    ->label("ID Customer"),
                TextColumn::make('ket_faktur')
                    ->label("Keterangan Faktur"),
                TextColumn::make('total')
                    ->label("Total"),
                TextColumn::make('nominal_charge')
                    ->label("Nominal Charge"),
                TextColumn::make('charge')
                    ->label("Charge"),
                TextColumn::make('total_final')
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
