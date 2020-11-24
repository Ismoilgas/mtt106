<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Repositories\KiddyRepository;
    

class KiddyController extends Controller
{
    /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(KiddyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Show the staff.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function about()
    {
        $teachers = $this->repository->about();

        return view('front.about', compact('teachers'));
    }


    /**
     * Show the contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function contact()
    {
        return view('front.contact');
    }

    /**
     * Show the gallery.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */    
    public function gallery()
    {
        $photos = $this->repository->gallery();

        return view('front.gallery', compact('photos'));
    }
  
}
