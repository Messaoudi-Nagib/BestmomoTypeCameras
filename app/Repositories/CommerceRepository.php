<?php
/**
 * Created by IntelliJ IDEA.
 * User: adminag
 * Date: 08/01/19
 * Time: 07:21
 */

namespace App\Repositories;

use App\Models\Commerce;


class CommerceRepository extends BaseRepository{

    public function __construct(Commerce $commerce)
{
    $this->model = $commerce;
}


    public function store($request)
    {
        // Save image
        $path = basename ($request->image->store('images'));

        // Save thumb
        $image = InterventionImage::make ($request->image)->widen (500)->encode ();
        Storage::put ('thumbs/' . $path, $image);

        // Save in base
        $image = new Image;
        $image->description = $request->description;
        $image->category_id = $request->category_id;
        $image->camera_id = $request->camera_id;
        $image->adult = isset($request->adult);
        $image->name = $path;
        $request->user()->images()->save($image);
    }
}

