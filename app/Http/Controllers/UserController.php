<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;


class UserController extends Controller
{
        /** @var  UserRepository */
        private $userRepository;


        public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;

    }

      /**
     * Display a listing of the Users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }
}
