<?php

namespace App\Controllers;

class ArchiveController
{

    public function index()
    {
        view("archive.index");
    }
    public function posts()
    {
        view("archive.posts");
    }
    public function products()
    {
        view("archive.products");
    }
}
