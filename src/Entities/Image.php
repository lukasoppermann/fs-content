<?php

namespace Formandsystem\Content\Entities;

use Formandsystem\Content\Entities\AbstractApiResourceEntity;

class Image extends AbstractApiResourceEntity
{
    /**
     * the service class for this entity
     */
    protected $resourceService = '\Formandsystem\Content\Services\Api\ImageService';
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
            'filename'      => $attributes['attributes']['filename'],
            'slug'          => $attributes['attributes']['slug'],
            'link'          => $attributes['attributes']['filename'],
        ];
    }
}
