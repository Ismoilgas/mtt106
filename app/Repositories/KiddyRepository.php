<?php

namespace App\Repositories;

use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\DB;

class KiddyRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_staf;
    // protected $model_new;
    protected $model_image;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Post $staf, Page $image)
    {
        $this->model_staf = $staf;
        
        $this->model_image = $image;
    }

    /**
     * Create a query for Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function about()
    {
        $query = $this->model_staf
            ->select('id', 'name', 'position');
            // ->orderBy('id', 'desc');
        // dd($query);    
        return $query->get();
    }

    /**
     * Create a query for Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function gallery()
    {
        $query = $this->model_image
            ->select('image');
            
        return $query->paginate(9);
    }

        

}
