<?php

namespace Formandsystem\Content\Services\Api;

class PageService extends AbstractApiService
{
    /**
     * all available includes
     *
     * @var array
     */
    protected $includes = [
        'fragments',
        'pages',
        'collections',
        'ownedByPages',
        'ownedByCollections',
    ];
    /**
     * the name of the entity
     *
     * @var string
     */
    protected $entity = '\Formandsystem\Content\Entities\Page';
    /**
     * the api endpoint to connect to
     *
     * @var string
     */
    protected $endpoint = 'pages';
}
