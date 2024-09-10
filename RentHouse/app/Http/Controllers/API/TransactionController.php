<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use App\Http\Requests\Transaction\Store;
use App\Models\Listing;
use App\Models\Transaction;
use Illuminate\Http\JsonResponse;

class TransactionController extends Controller
{
    private function _fullyBookedChecker(Store $request)
    {
        $listing = Listing::find($request->listings_id);
        $runningTransactionCount = Transaction::whereListingId($listing->id)
            ->whereNot('status', 'canceled')
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [
                    $request->start_date,
                    $request->end_date,
                ])->orWhereBetween('end_date', [
                    $request->start_date,
                    $request->end_date,
                ])->orWhere(function ($subquery) use ($request) {
                    $subquery->where('start_date', '<', $request->start_date)
                        ->where('end_date', '>', $request->end_date);
                });
            });

            if($runningTransactionCount >= $listing->max_person){
                throw new HttpResponseException(
                    response()->json([
                        'success' => false,
                        'message' => 'Listing is fully booked',
                    ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
                );
            }

            return true;

    }
}
