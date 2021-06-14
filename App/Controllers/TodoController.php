<?php

namespace App\Controllers;

class TodoController
{

    public function list()
    {
        $data = [
            'tasks' => ['1st Task', '2nd Task', '3rd Task', '4th Task', '5th Task', '6th Task', '7th Task'],
            'title' => 'لیست تسک ها'
        ];
        view("todo.list", $data);
    }

    public function add()
    {
        // view("todo.add");
    }

    public function remove()
    {
        // view("todo.remove");
    }
}
