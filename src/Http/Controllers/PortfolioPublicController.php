<?php

namespace Litecms\Portfolio\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Portfolio\Interfaces\PortfolioRepositoryInterface;

class PortfolioPublicController extends BaseController
{
    // use PortfolioWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Portfolio\Interfaces\PortfolioRepositoryInterface $portfolio
     *
     * @return type
     */
    public function __construct(PortfolioRepositoryInterface $portfolio)
    {
        $this->repository = $portfolio;
        parent::__construct();
    }

    /**
     * Show portfolio's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $portfolios = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();



        return $this->response->setMetaTitle(trans('portfolio::portfolio.names'))
            ->view('portfolio::portfolio.index')
            ->data(compact('portfolios'))
            ->output();
    }

    /**
     * Show portfolio's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $portfolios = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('portfolio::portfolio.names'))
            ->view('portfolio::portfolio.index')
            ->data(compact('portfolios'))
            ->output();
    }

    /**
     * Show portfolio.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $portfolio = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle(trans('portfolio::portfolio.name'))
            ->view('portfolio::portfolio.show')
            ->data(compact('portfolio'))
            ->output();
    }

}
