<?php

namespace Statamic\Auth\Eloquent;

use Statamic\Auth\UserCollection;
use Statamic\Query\EloquentQueryBuilder;

class UserQueryBuilder extends EloquentQueryBuilder
{
    protected function transform($items)
    {
        return UserCollection::make($items)->map(function ($model) {
            return User::fromModel($model);
        });
    }
}
