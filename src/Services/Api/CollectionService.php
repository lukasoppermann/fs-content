<?php

namespace Formandsystem\Content\Services\Api;

class CollectionService extends AbstractApiService
{
    /**
     * all available includes
     *
     * @var array
     */
    protected $includes = [
        'pages',
        'ownedByPages',
        'collections',
        'ownedByCollections',
        'fragments',
        'ownedByFragments',
    ];
    /**
     * the name of the entity
     *
     * @var string
     */
    protected $entity = '\Formandsystem\Content\Entities\Collection';
    /**
     * the api endpoint to connect to
     *
     * @var string
     */
    protected $endpoint = 'collections';
}
