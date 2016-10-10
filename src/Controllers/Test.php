<?php

namespace Formandsystem\Content\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Formandsystem\Api\Api;
use Formandsystem\Content\Services\CacheService;
use Illuminate\Http\Request;
use App\Http\Requests;
use Formandsystem\Content\Entities\User;

use Formandsystem\Content\Services\Api\CollectionService;
use Formandsystem\Content\Services\Api\FragmentService;
use Formandsystem\Content\Services\Api\PageService;

class Test
extends BaseController
// extends Controller
{
    public function __construct(Request $request)
    {
        config(['app.user' => new User($request->user()->id)]);
        if($client = config('app.user')->account()->details('type','cms_client',true)){
            config(['app.user_client' => $client->get('data')]);
        }
        new User($request->user()->id);
        // dd(new Metadetail('9d215353-8752-4b9e-812d-c8c2dcbd5e26'));
        // // TODO: replace everywhere

        // parent::__construct($request);
    }

    public function index(Request $request)
    {

        config(['app.active_account' => config('app.user')->accounts()->first()->get('id')]);
        \Log::debug(config('app.user')->account()->details());
        // echo config('app.user')->account()->get('name');
        echo "yo";
    }
}
