<?php

namespace App\Http\Controllers;

use App\Step;
use App\Task;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CompletedStepsController extends Controller
{
    public function store(Step $step)
    {
        $step->complete();
        return back();
    }

    public function destroy(Step $step)
    {
        $step->incomplete();
        return back();
    }
}
