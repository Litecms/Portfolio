<?php

namespace Litecms\Portfolio\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class PortfolioTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Portfolio\Models\Portfolio $portfolio)
    {
        return [
            'id'                => $portfolio->getRouteKey(),
            'title'             => $portfolio->title,
            'details'           => $portfolio->details,
            'category_id'       => @$portfolio->category->name,
            'image'             => $portfolio->image,
            'images'            => $portfolio->images,
            'slug'              => $portfolio->slug,
            'subtitle'          => $portfolio->subtitle,
            'url'               => $portfolio->url,
            'published'         => $portfolio->published,
            'status'            => $portfolio->status,
            'user_id'           => $portfolio->user_id,
            'user_type'         => $portfolio->user_type,
            'upload_folder'     => $portfolio->upload_folder,
            'deleted_at'        => $portfolio->deleted_at,
            'created_at'        => $portfolio->created_at,
            'updated_at'        => $portfolio->updated_at,
            'url'              => [
                'public' => trans_url('portfolio/'.$portfolio->getPublicKey()),
                'user'   => guard_url('portfolio/portfolio/'.$portfolio->getRouteKey()),
            ], 
            'status'            => trans($portfolio->status),
            'created_at'        => format_date($portfolio->created_at),
            'updated_at'        => format_date($portfolio->updated_at),
        ];
    }
}