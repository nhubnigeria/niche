<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserContract;

class DashboardController extends Controller
{
    protected $userRepo;
    
    public function __construct(UserContract $userContract) {
        $this->userRepo = $userContract;
    }
    
    public function adminDashboard() {
        $users = $this->userRepo->findAll();
    }
}
