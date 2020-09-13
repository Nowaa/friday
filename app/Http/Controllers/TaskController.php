<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Status;

class TaskController extends Controller
{
    public function load()
    {
        //dd(Status::find(1)->tasks()->get());

        $status = Status::all();

        return view('welcome', [
            'status' => $status
        ]);
    }

    public static function setPriorityColor($priority)
    {
        $color = '';

        switch ($priority) {
            case 'Low':
                $color = 'border-teal-300';
                break;
            case 'Medium':
                $color = 'border-yellow-400';
                break;
            case 'High':
                $color = 'border-orange-400';
                break;   
            case 'Urgent':
                $color = 'border-red-400'    ;
                break;  
        }
        return $color;
    }
}
