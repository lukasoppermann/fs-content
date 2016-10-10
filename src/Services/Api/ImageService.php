<?php

namespace Formandsystem\Content\Services\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Account;
use Formandsystem\Content\Entities\Collection;

class ImageService extends AbstractApiService
{
    /**
     * all available includes
     *
     * @var array
     */
    protected $includes = [

    ];
    /**
     * the name of the entity
     *
     * @var string
     */
    protected $entity = '\Formandsystem\Content\Entities\Image';
    /**
     * the api endpoint to connect to
     *
     * @var string
     */
    protected $endpoint = 'images';
    /**
     * upload
     *
     * @method upload
     *
     * @return EXCEPTION|array
     */
    public function upload()
    {

    }
}
