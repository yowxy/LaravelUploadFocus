<?php


namespace App\Repositories;

use App\Models\Seller;
use App\Repositories\Contracts\SellerRepositoryInterface;

class   SellerRepository implements  SellerRepositoryInterface
{
    public function getAllSeller(){
        return Seller::latest()->get();
    }
}
