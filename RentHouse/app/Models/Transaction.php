<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'listing_id',
        'start_date',
        'end_date', 
        'price_per_day',
        'total_days',
        'fee',
        'total_price',
        'status'
    ];

    public function setListingidAttribute($value){
        $listing = Listing::find($value);
        $total_days = Carbon::createFromDate($this->attributes['start_date'])
                            ->diffInDays(Carbon::createFromDate($this->attributes['end_date'])->addDay());
        $totalPrice = $listing->price_per_day * $total_days;
        $fee = $totalPrice * 0.1;

        $this->attributes['listings_id'] = $value; // Keep 'listings_id' to match your schema
        $this->attributes['price_per_day'] = $listing->price_per_day;
        $this->attributes['total_days'] = $total_days;
        $this->attributes['fee'] = $fee;
        $this->attributes['total_price'] = $totalPrice + $fee;
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function Listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
