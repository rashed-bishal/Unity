<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
<<<<<<< HEAD
        return //Post::all();
        Post::where('category_id',1)->delete();
        //dd('Post Deleted');

=======
        
        return Post::onlyTrashed()->where('id',9)->forceDelete();
>>>>>>> cdaefea2c9346e379b43ce8d12056d86f26ae1c4

    }
}