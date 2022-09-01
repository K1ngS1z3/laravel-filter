<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilters extends BasicFilters
{

    /**
     * @param string $firstname
     * @return Builder
     */
    public function firstname(string $firstname): Builder
    {
        return $this->builder->where('first_name', $firstname);
    }

    /**
     * @param string $lastname
     * @return Builder
     */
    public function lastname(string $lastname): Builder
    {
        return $this->builder->where('last_name', $lastname);
    }

    /**
     * @param string $age
     * @return Builder
     */
    public function age(string $age): Builder
    {
        return $this->builder->where('age', $age);
    }

    /**
     * @param string $location
     * @return Builder
     */
    public function location(string $location): Builder
    {
        return $this->builder->where('location', 'like', '%' . $location . '%');
    }

//    public function books()
//    {
//        return $this->builder->whereHas('location', 'like', '%' . $location . '%');
//    }
}
