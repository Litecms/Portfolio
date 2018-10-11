<?php

namespace Litecms\Portfolio\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Portfolio\Interfaces\CategoryRepositoryInterface;

class CategoryPublicController extends BaseController
{
    // use CategoryWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Category\Interfaces\CategoryRepositoryInterface $category
     *
     * @return type
     */
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->repository = $category;
        parent::__construct();
    }

    /**
     * Show category's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $categories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('portfolio::category.names'))
            ->view('portfolio::public.category.index')
            ->data(compact('categories'))
            ->output();
    }

    /**
     * Show category's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $categories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('portfolio::category.names'))
            ->view('portfolio::public.category.index')
            ->data(compact('categories'))
            ->output();
    }

    /**
     * Show category.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $category = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle($category->name . trans('portfolio::category.name'))
            ->view('portfolio::public.category.show')
            ->data(compact('category'))
            ->output();
    }

}
