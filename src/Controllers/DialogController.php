<?php

namespace Formandsystem\Content\Controllers;

use Illuminate\Http\Request;
use Formandsystem\Content\Services\DialogService;
use App\Http\Requests;

class DialogController extends Controller
{
    function show(Request $request, $type){
        return (new DialogService)->show($request, $type);
    }
}
