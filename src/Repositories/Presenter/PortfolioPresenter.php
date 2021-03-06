<?php

namespace Litecms\Portfolio\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class PortfolioPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PortfolioTransformer();
    }
}