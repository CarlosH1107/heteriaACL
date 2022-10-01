<?php

namespace Heteria\Shinobi;

use Heteria\Shinobi\Tactics\AssignRoleTo;
use Heteria\Shinobi\Tactics\GivePermissionTo;
use Heteria\Shinobi\Tactics\RevokePermissionFrom;

class Shinobi
{
    /**
     * Fetch an instance of the Role model.
     * 
     * @return Role
     */
    public function role()
    {
        return app()->make(config('shinobi.models.role'));
    }

    /**
     * Fetch an instance of the Permission model.
     * 
     * @return Permission
     */
    public function permission()
    {
        return app()->make(config('shinobi.models.permission'));
    }

    /**
     * Assign roles to a user.
     * 
     * @param  string|array  $roles
     * @return \Heteria\Shinobi\Tactic\AssignRoleTo
     */
    public function assign($roles): AssignRoleTo
    {
        return new AssignRoleTo($roles);
    }
    
    /**
     * Give permissions to a user or role
     * 
     * @param  string|array  $permissions
     * @return \Heteria\Shinobi\Tactic\GivePermissionTo
     */
    public function give($permissions): GivePermissionTo
    {
        return new GivePermissionTo($permissions);
    }
    
    /**
     * Revoke permissions from a user or role
     * 
     * @param  string|array  $permissions
     * @return \Heteria\Shinobi\Tactic\RevokePermissionFrom
     */
    public function revoke($permissions): RevokePermissionFrom
    {
        return new RevokePermissionFrom($permissions);
    }
}
