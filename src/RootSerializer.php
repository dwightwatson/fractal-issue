<?php

namespace Watson\FractalIssue;

use League\Fractal\Serializer\DataArraySerializer;

class RootSerializer extends DataArraySerializer
{
    /**
     * Serialize a collection.
     *
     * @param  string  $resourceKey
     * @param  array   $data
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return is_null($resourceKey) ? $data : [$resourceKey => $data];
    }

    /**
     * Serialize an item.
     *
     * @param  string  $resourceKey
     * @param  array   $data
     * @return array
     */
    public function item($resourceKey, array $data)
    {
        return is_null($resourceKey) ? $data : [$resourceKey => $data];
    }
}
