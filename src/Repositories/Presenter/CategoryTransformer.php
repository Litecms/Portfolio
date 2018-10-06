<?php

namespace Litecms\Portfolio\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Portfolio\Models\Category $category)
    {
        return [
            'id'                => $category->getRouteKey(),
            'name'              => $category->name,
            'slug'              => $category->slug,
            'status'            => $category->status,
            'user_id'           => $category->user_id,
            'user_type'         => $category->user_type,
            'upload_folder'     => $category->upload_folder,
            'deleted_at'        => $category->deleted_at,
            'created_at'        => $category->created_at,
            'updated_at'        => $category->updated_at,
            'url'              => [
                'public' => trans_url('portfolio/'.$category->getPublicKey()),
                'user'   => guard_url('portfolio/category/'.$category->getRouteKey()),
            ], 
            'status'            => trans($category->status),
            'created_at'        => format_date($category->created_at),
            'updated_at'        => format_date($category->updated_at),
        ];
    }
}