<?php

namespace Formandsystem\Content\Entities;

use Formandsystem\Content\Entities\AbstractApiResourceEntity;
use Illuminate\Support\Collection as LaravelCollection;
use Cache;

class Page extends AbstractApiResourceEntity
{
    /**
     * the service class for this entity
     */
    protected $resourceService = '\Formandsystem\Content\Services\Api\PageService';
    /**
     * transform attributes
     *
     * @method attributes
     *
     * @param  Array      $attributes
     *
     * @return array
     */
    protected function attributes($attributes)
    {
        return [
            'id'            => $attributes['id'],
            'resource_type' => $attributes['type'],
            'position'      => $attributes['attributes']['position'],
            'menu_label'    => $attributes['attributes']['menu_label'],
            'slug'          => $attributes['attributes']['slug'],
            'published'     => (bool)$attributes['attributes']['published'],
            'language'      => $attributes['attributes']['language'],
            'title'         => $attributes['attributes']['title'],
            'description'   => $attributes['attributes']['description'],
            'is_trashed'    => $attributes['attributes']['is_trashed'],
        ];
    }
    /**
     * get the collection the current page is in
     *
     * @method parentCollection
     *
     * @return Formandsystem\Content\Entities\Collection
     */
    public function parentCollection()
    {
        // get data
        $data = $this->getCacheOrRetrieve('parentCollection', 'Collection');
        // return collection
        return $this->collectionData($data)->first();
    }
    /**
     * get parent collection from page relationship
     *
     * @method retrieveAccount
     *
     * @return Illuminate\Support\Collection
     */
    protected function retrieveParentCollection()
    {
        $related = $this->resourceService()->relationship($this->get('id'), 'ownedByCollections');
        // cache included
        if(isset($related['included'])){
            $this->cacheAsEntities($related['included']);
        }
        // return as collection
        if(isset($related['data'])){
            return (new LaravelCollection($related['data']))->map(function($item){
                return new LaravelCollection($item);
            });
        }
    }
}
