<?php

class TaskController {
    public function index($page = 1)
    {
        $tasks = Task::paginateUri(10, $page);

        return view('tasks.index', compact('tasks'));
    }
}
