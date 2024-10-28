<?php

namespace App\Services;

use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\SellerRepositoryInterface;
use App\Repositories\Contracts\TicketRepositoryInterface;

class FrontService{
    protected $CategoryRepository;
    protected $ticketRepository;

    protected $sellerRepository;

    public function __construct(TicketRepositoryInterface  $ticketRepository ,
    CategoryRepositoryInterface $categoryRepository , SellerRepositoryInterface $sellerRepository){
        $this->CategoryRepository = $categoryRepository;
        $this->ticketRepository = $ticketRepository;
        $this->sellerRepository = $sellerRepository;
    }

    public  function getFrontPageData(){
        $categories = $this->CategoryRepository->getAllCategories();
        $sellers = $this->sellerRepository->getAllSeller();
        $popularTickets = $this->ticketRepository->getPopularTickets(4);
        $newTickets = $this->ticketRepository->getAllNewTickets();

        return compact ('categories', 'sellers','popularTickets' , 'newTickets');

    }


}
