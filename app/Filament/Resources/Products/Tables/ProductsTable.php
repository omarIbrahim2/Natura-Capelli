<?php

namespace App\Filament\Resources\Products\Tables;

use App\Models\Routine;
use App\Models\Category;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                   ImageColumn::make('image')
                    ->circular(),
                
                TextColumn::make('name')
                    ->searchable(  true,function ($query, $search) {
                        return $query->whereHas('translations', function ($q) use ($search) {
                            $q->where('name', 'like', "%{$search}%");
                        });
                    }),

                   TextColumn::make('price')
                   ->sortable(),
                   
                   ToggleColumn::make('in_stock'),

            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Category')
                    ->options(Category::query()->with(['translations'])->get()->pluck('title' , 'id'))
                    ->attribute('category_id'),

                 SelectFilter::make('Routine')
                    ->label('Rotine')
                    ->options(Routine::query()->with(['translations'])->get()->pluck('title' , 'id'))
                    ->attribute('routine_id'),

                 TernaryFilter::make('in_stock'),

                 TernaryFilter::make('featured'),
            ], layout: FiltersLayout::AboveContent)
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
