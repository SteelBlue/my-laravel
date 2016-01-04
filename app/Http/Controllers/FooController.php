<?php

namespace App\Http\Controllers;

use App\Repositories\FooRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FooController extends Controller
{
    /**
     * If multiple methods need the object, use constructor injection.
     **/
//    private $repository;
//
//    public function __construct(FooRepository $repository)
//    {
//        $this->repository = $repository;
//    }


    /**
     * If only one instance of an object is needed, use method injection.
     **/
    public function foo(FooRepository $repository)
    {
        return $repository->get();
    }
}
