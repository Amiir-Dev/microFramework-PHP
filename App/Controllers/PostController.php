<?php

namespace App\Controllers;

use App\Models\User;

class PostController
{

    public function single()
    {
        global $request;
        $user = new User(9);
        // $result = $user->remove();

        $user->name = "Alireza";
        $user->email = "alireza@gmail.com";
        nice_dump($user->save()->name);

        $slug = $request->get_route_param('slug');
        echo 'slug: ' . $slug;
    }

    public function comment()
    {
        global $request;
        $comment_id = $request->get_route_param('comment_id');
        echo 'comment_id:' . $comment_id;
    }
}
