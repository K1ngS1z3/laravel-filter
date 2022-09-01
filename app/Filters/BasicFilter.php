<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class BasicFilter
{
    /**
     * @var Builder
     */
    protected Builder $builder;

    /**
     * @param Request $request
     */
    public function __construct(
        protected Request $request
    ) {
    }


    /**
     * @param Builder $builder
     * @return $this
     */
    public function setBuilder(Builder $builder): self
    {
        $this->builder = $builder;
        return $this;
    }

    public function makeFilter()
    {
        $filters = $this->request->query();

        foreach ($filters as $name => $value) {
            if (method_exists($this, $name)) {
                    $this->{$name}($name);
            }
        }

        return $this->builder;
    }
}
