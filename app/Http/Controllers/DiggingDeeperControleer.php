<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class DiggingDeeperControleer extends Controller
{

    public function collections()
    {

        $result = [];

        $eloquentCollection = BlogPost::withTrashed()->get();

        //dd(__METHOD__, $eloquentCollection, $eloquentCollection->toArray());

        $collection = collect($eloquentCollection->toArray());

        dd(get_class($eloquentCollection), get_class($collection), $collection);
    }
}
