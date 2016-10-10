<?php

namespace Formandsystem\Content\Services;

use Formandsystem\Content\Services\Api\FragmentService;
use Formandsystem\Content\Services\Api\CollectionService;
use Formandsystem\Content\Entities\User;
use Illuminate\Http\Request;

class DialogService extends AbstractService
{
    public function show(Request $request, $type)
    {
        \Config::set('user.grid-sm',2);
        \Config::set('user.grid-md',12);
        \Config::set('user.grid-lg',16);
        config(['app.user' => new User($request->user())]);

        return $this->{'dialog'.ucfirst($type)}($request);
    }

    protected function dialogEditCollection(Request $request)
    {
        $collection = new \Formandsystem\Content\Entities\Collection($request->get('id'));
        if($collection !== NULL){
            return view('notice.dialog.edit-collection', $collection->toArray())->render();
        }
        return false;
    }

    protected function dialogNewCollection(Request $request)
    {
        return view('notice.dialog.new-collection')->render();
    }

    protected function dialogFragmentSettings(Request $request)
    {
        return view('notice.dialog.fragment-settings', [
            'item' => new \Formandsystem\Content\Entities\Fragment($request->get('id'))
        ])->render();
    }
}
