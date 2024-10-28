<?php

namespace App\Services;

use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\TicketRepositoryInterface;

class FrontService{
    protected $CategoryRepository;
    protected $ticketRepository;

    public function __construct(TicketRepositoryInterface  $ticketRepository ,
    CategoryRepositoryInterface $categoryRepository){
        $this->CategoryRepository = $categoryRepository;
        $this->ticketRepository = $ticketRepository;
    }

    public  function getFrontPage(){
        $categories = $this->CategoryRepository->getAllCategories();
        $popularTickets = $this->ticketRepository->getPopularTickets(4);
        $newTickets = $this->ticketRepository->getAllNewTickets();

        return compact ('categories', 'popularTickets' , 'newTickets');

    }


}
