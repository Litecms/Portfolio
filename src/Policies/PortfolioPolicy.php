<?php

namespace Litecms\Portfolio\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Portfolio\Models\Portfolio;

class PortfolioPolicy
{

    /**
     * Determine if the given user can view the portfolio.
     *
     * @param UserPolicy $user
     * @param Portfolio $portfolio
     *
     * @return bool
     */
    public function view(UserPolicy $user, Portfolio $portfolio)
    {
        if ($user->canDo('portfolio.portfolio.view') && $user->isAdmin()) {
            return true;
        }

        return $portfolio->user_id == user_id() && $portfolio->user_type == user_type();
    }

    /**
     * Determine if the given user can create a portfolio.
     *
     * @param UserPolicy $user
     * @param Portfolio $portfolio
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('portfolio.portfolio.create');
    }

    /**
     * Determine if the given user can update the given portfolio.
     *
     * @param UserPolicy $user
     * @param Portfolio $portfolio
     *
     * @return bool
     */
    public function update(UserPolicy $user, Portfolio $portfolio)
    {
        if ($user->canDo('portfolio.portfolio.edit') && $user->isAdmin()) {
            return true;
        }

        return $portfolio->user_id == user_id() && $portfolio->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given portfolio.
     *
     * @param UserPolicy $user
     * @param Portfolio $portfolio
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Portfolio $portfolio)
    {
        return $portfolio->user_id == user_id() && $portfolio->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given portfolio.
     *
     * @param UserPolicy $user
     * @param Portfolio $portfolio
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Portfolio $portfolio)
    {
        if ($user->canDo('portfolio.portfolio.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given portfolio.
     *
     * @param UserPolicy $user
     * @param Portfolio $portfolio
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Portfolio $portfolio)
    {
        if ($user->canDo('portfolio.portfolio.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
