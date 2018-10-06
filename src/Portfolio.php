<?php

namespace Litecms\Portfolio;

use User;

class Portfolio
{
    /**
     * $portfolio object.
     */
    protected $portfolio;
    /**
     * $category object.
     */
    protected $category;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Portfolio\Interfaces\PortfolioRepositoryInterface $portfolio,
        \Litecms\Portfolio\Interfaces\CategoryRepositoryInterface $category)
    {
        $this->portfolio = $portfolio;
        $this->category = $category;
    }

    /**
     * Returns count of portfolio.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.portfolio.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->portfolio->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\PortfolioUserCriteria());
        }

        $portfolio = $this->portfolio->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('portfolio::' . $view, compact('portfolio'))->render();
    }
    
    public function categories()
    {
        return $this->category->selectCategories();
    }
}
