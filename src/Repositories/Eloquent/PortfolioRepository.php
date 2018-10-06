<?php

namespace Litecms\Portfolio\Repositories\Eloquent;

use Litecms\Portfolio\Interfaces\PortfolioRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class PortfolioRepository extends BaseRepository implements PortfolioRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.portfolio.portfolio.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.portfolio.portfolio.model.model');
    }
}
