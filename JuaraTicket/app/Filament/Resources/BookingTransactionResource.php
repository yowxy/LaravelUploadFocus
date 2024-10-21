<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingTransactionResource\Pages;
use App\Filament\Resources\BookingTransactionResource\RelationManagers;
use App\Models\BookingTransaction;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingTransactionResource extends Resource
{
    protected static ?string $model = BookingTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Wizard::make([

                    Forms\Components\Wizard\Step::make('Product and Price')
                        ->schema([
                            Forms\Components\Select::make('ticket_id')
                                ->relationship('tickets', 'name')
                                ->searchable()
                                ->preload()
                                ->required()
                                ->reactive()
                                ->afterStateUpdated(function($state, callable $set){
                                    $ticket = Ticket::find($state);
                                    $set('price', $ticket ? $ticket->price : 0 );
                                }),


                            Forms\Components\TextInput::make('total_participant')
                                ->required()
                                ->numeric()
                                ->prefix('people')
                                ->reactive()
                                ->afterStateUpdated( function($state, callable $get, callable $set){
                                    $price = $get('price');
                                    $subtotal = $price * $state;
                                    $totalPpn = $subtotal * 0.11;
                                    $totalAmount = $subtotal + $totalPpn;

                                    $set('total_amount', $totalAmount);
                                }),


                             Forms\Components\TextInput::make('total_amount')
                                ->required()
                                ->numeric()
                                ->prefix('IDR')
                                ->readonly()
                                ->helperText('Harga sudah include PPN 11%'),

                            ]),


                            Forms\Components\Wizard\Step::make('Customer Information')
                                ->schema([

                                    Forms\Components\TextInput::make('name')
                                        ->required()
                                        ->maxLength(255),

                                    Forms\Components\TextInput::make('email')
                                        ->required()
                                        ->maxLength(255),

                                    Forms\Components\TextInput::make('phone_number')
                                        ->required()
                                        ->maxLength(255),

                                    Forms\Components\TextInput::make('booking_trx_id')
                                        ->required()
                                        ->maxLength(255),
                                ]),


                            Forms\Components\Wizard\Step::make('Payment Information')
                                ->schema([

                                    ToggleButtons::make('is_paid')
                                        ->label('Apakah sudah membayar')
                                        ->boolean()
                                        ->grouped()
                                        ->icons([
                                            true => 'heroicon-o-pencil',
                                            false => 'heroicon-o-clock',
                                        ])

                                       ->required(),

                                    Forms\Components\FileUpload::make('proof')
                                            ->image()
                                            ->required(),

                                    Forms\Components\DatePicker::make('started_at')
                                            ->required(),
                                ])
                ])
                ->columnSpan('full')
                ->columns(1)
                ->skippable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('tickets.thumbnail'),

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('booking_trx_id')
                    ->searchable(),

                 Tables\Columns\IconColumn::make('is_paid')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->label('Terverifikasi'),

            ])
            ->filters([
                SelectFilter::make('ticket_id')
                ->label('ticket')
                 ->relationship('tickets' , 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBookingTransactions::route('/'),
            'create' => Pages\CreateBookingTransaction::route('/create'),
            'edit' => Pages\EditBookingTransaction::route('/{record}/edit'),
        ];
    }
}
