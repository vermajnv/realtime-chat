<?php

namespace App\Filter;

use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class MenuFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (isset($item['role']) && ! Auth::user()->hasRole($item['role'])) {
            return false;
        }

        return $item;
    }
}
