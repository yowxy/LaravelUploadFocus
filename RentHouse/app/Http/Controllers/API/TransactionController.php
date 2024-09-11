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


    public function index()
    {
        $transaction = Transaction::with('listing')->whereUserId(auth()->id())->paginate();

        return response()->json([
            'success' => true,
            'message' => 'Get all my transactions',
            'data' => $transaction,
        ]);
    }

    private function _fullyBookedChecker(Store $request)
    {
        $listing = Listing::find($request->listings_id);
        $runningTransactionCount = Transaction::where('listings_id', $listing->id)
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
            })->count();

        if ($runningTransactionCount >= $listing->max_person) {
            throw new HttpResponseException(
                response()->json([
                    'success' => false,
                    'message' => 'Listing is fully booked',
                ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
            );
        }

        return true;
    }

    public function isAvailable(Store $request)
    {
        $this->_fullyBookedChecker($request);

        return response()->json([
            'success' => true,
            'message' => 'Listing is ready to book'
        ]);
    }


    public function store (Store $request)
    {
        $this->_fullyBookedChecker($request);
        $transaction = Transaction::create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'listing_id' => $request->listings_id, // Ensure this field is passed
            'user_id' => auth()->id(),
        ]);


        $transaction->Listing;
        return response()->json([
            'success' => true,
            'message' => 'New Transaction created',
            'data' => $transaction,
        ]);

    }


}
