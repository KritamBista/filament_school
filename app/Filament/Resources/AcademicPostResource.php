<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademicPostResource\Pages;
use App\Filament\Resources\AcademicPostResource\RelationManagers;
use App\Models\AcademicPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Stringable;

class AcademicPostResource extends Resource
{
    protected static ?string $model = AcademicPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(debounce:'1000')
                    ->afterStateUpdated(fn(Set $set,?string $state)=>$set('slug',Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\RichEditor::make('Description')
                    ->required()
                    ->columnSpanFull(),
                    Forms\Components\TextInput::make('slug')

                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAcademicPosts::route('/'),
            'create' => Pages\CreateAcademicPost::route('/create'),
            'view' => Pages\ViewAcademicPost::route('/{record}'),
            'edit' => Pages\EditAcademicPost::route('/{record}/edit'),
        ];
    }
}
