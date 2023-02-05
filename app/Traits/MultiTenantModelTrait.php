<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait MultiTenantModelTrait
{
    public static function bootMultiTenantModelTrait()
    {
        if (!app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth()->user()->roles->contains(1);
            $isEmployee = auth()->user()->roles->contains(2);
            static::creating(function ($model) use ($isAdmin) {
                // Reapply IF condition and admin entries will be global
                //if (!$isAdmin) {
                    $model->created_by_id = auth()->id();
                //}
            });
            if (!($isAdmin || $isEmployee)) {
                static::addGlobalScope('created_by_id', function (Builder $builder) {
                    $field = sprintf('%s.%s', $builder->getQuery()->from, 'created_by_id');

                    $builder->where($field, auth()->id())->orWhereNull($field);
                });
            }

        }
    }
}
