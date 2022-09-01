<?php

namespace App\Http\Controllers;

use App\Filters\UserFilters;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param UserFilters $filters
     * @return Collection
     */
    public function index(UserFilters $filters): Collection
    {
        return User::filter($filters)->get();
    }
}
