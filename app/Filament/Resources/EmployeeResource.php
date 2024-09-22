<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\City;
use App\Models\Employee;
use App\Models\State;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Employee Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Relationships')
                ->schema([
                    Forms\Components\Select::make('country_id')
                    ->relationship(name:'country',titleAttribute:'name')
                    ->searchable()
                    ->preload()
                    ->live()
                    // ->afterStateUpdated(fn(Set $set)=> $set('state_id',null))
                    ->afterStateUpdated(function(Set $set){
                        $set('state_id',null);
                        $set('city_id',null);
                    })
                    ->required(),

                    Forms\Components\Select::make('state_id')
                        ->options(fn (Get $get): Collection => new Collection(
                            State::query()
                                ->where('country_id', $get('country_id'))
                                ->get(['id', 'name'])
                                ->mapWithKeys(fn ($state) => [$state->id => $state->name])
                        ))
                        ->searchable()
                        ->preload()
                        ->live()
                        ->afterStateUpdated(fn(Set $set)=> $set('city_id',null))
                        ->required(),

                    Forms\Components\Select::make('city_id')
                        ->options(fn (Get $get): Collection => new Collection(
                            City::query()
                                ->where('state_id', $get('state_id'))
                                ->get(['id', 'name'])
                                ->mapWithKeys(fn ($city) => [$city->id => $city->name])
                        ))
                        ->searchable()
                        ->preload()
                        ->live()
                        ->required(),


                    Forms\Components\Select::make('department_id')
                    ->relationship(name:'department',titleAttribute:'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                ])->columns(2),
                Forms\Components\Section::make('User name')
                ->description('Enter User name details')
                ->schema([
                    Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('middle_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                ]),
                Forms\Components\Section::make('Address')->description('Address of the User')
                ->schema([
                    Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('zip_code')
                    ->maxLength(255)
                    ->default(null),
                ]),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->native(false)
                    ->required(),
                Forms\Components\DatePicker::make('date_hired')
                    // ->native(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('country_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('state_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('department_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('middle_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('zip_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_hired')
                    ->searchable(),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'view' => Pages\ViewEmployee::route('/{record}'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
