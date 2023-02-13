<?php

namespace Laltu\LaravelRolesPermission;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelRolesPermission\Skeleton\SkeletonClass
 */
class LaravelRolesPermissionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-roles-permission';
    }
}
