<?php

namespace Litecms\Portfolio\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Portfolio\Http\Requests\PortfolioRequest;
use Litecms\Portfolio\Interfaces\PortfolioRepositoryInterface;
use Litecms\Portfolio\Models\Portfolio;

/**
 * Resource controller class for portfolio.
 */
class PortfolioResourceController extends BaseController
{

    /**
     * Initialize portfolio resource controller.
     *
     * @param type PortfolioRepositoryInterface $portfolio
     *
     * @return null
     */
    public function __construct(PortfolioRepositoryInterface $portfolio)
    {
        parent::__construct();
        $this->repository = $portfolio;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Portfolio\Repositories\Criteria\PortfolioResourceCriteria::class);
    }

    /**
     * Display a list of portfolio.
     *
     * @return Response
     */
    public function index(PortfolioRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Portfolio\Repositories\Presenter\PortfolioPresenter::class)
                ->$function();
        }

        $portfolios = $this->repository->paginate();

        return $this->response->title(trans('portfolio::portfolio.names'))
            ->view('portfolio::portfolio.index', true)
            ->data(compact('portfolios'))
            ->output();
    }

    /**
     * Display portfolio.
     *
     * @param Request $request
     * @param Model   $portfolio
     *
     * @return Response
     */
    public function show(PortfolioRequest $request, Portfolio $portfolio)
    {

        if ($portfolio->exists) {
            $view = 'portfolio::portfolio.show';
        } else {
            $view = 'portfolio::portfolio.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('portfolio::portfolio.name'))
            ->data(compact('portfolio'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new portfolio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(PortfolioRequest $request)
    {

        $portfolio = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('portfolio::portfolio.name')) 
            ->view('portfolio::portfolio.create', true) 
            ->data(compact('portfolio'))
            ->output();
    }

    /**
     * Create new portfolio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(PortfolioRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $portfolio                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('portfolio::portfolio.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('portfolio/portfolio/' . $portfolio->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/portfolio/portfolio'))
                ->redirect();
        }

    }

    /**
     * Show portfolio for editing.
     *
     * @param Request $request
     * @param Model   $portfolio
     *
     * @return Response
     */
    public function edit(PortfolioRequest $request, Portfolio $portfolio)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('portfolio::portfolio.name'))
            ->view('portfolio::portfolio.edit', true)
            ->data(compact('portfolio'))
            ->output();
    }

    /**
     * Update the portfolio.
     *
     * @param Request $request
     * @param Model   $portfolio
     *
     * @return Response
     */
    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        try {
            $attributes = $request->all();

            $portfolio->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('portfolio::portfolio.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('portfolio/portfolio/' . $portfolio->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('portfolio/portfolio/' . $portfolio->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the portfolio.
     *
     * @param Model   $portfolio
     *
     * @return Response
     */
    public function destroy(PortfolioRequest $request, Portfolio $portfolio)
    {
        try {

            $portfolio->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('portfolio::portfolio.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('portfolio/portfolio/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('portfolio/portfolio/' . $portfolio->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple portfolio.
     *
     * @param Model   $portfolio
     *
     * @return Response
     */
    public function delete(PortfolioRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('portfolio::portfolio.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('portfolio/portfolio'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/portfolio/portfolio'))
                ->redirect();
        }

    }

    /**
     * Restore deleted portfolios.
     *
     * @param Model   $portfolio
     *
     * @return Response
     */
    public function restore(PortfolioRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('portfolio::portfolio.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/portfolio/portfolio'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/portfolio/portfolio/'))
                ->redirect();
        }

    }

}
