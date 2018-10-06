<?php

namespace Litecms\Portfolio\Repositories\Eloquent;

use Litecms\Portfolio\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.portfolio.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.portfolio.category.model.model');
    }

    public function selectCategories()
    {
        return $this->model->pluck('name', 'id');
    }
}
