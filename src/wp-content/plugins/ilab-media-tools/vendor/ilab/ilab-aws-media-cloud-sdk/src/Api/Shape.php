<?php
namespace ILABAmazon\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, ShapeMap $shapeMap)
    {
        static $map = [
            'structure' => 'ILABAmazon\Api\StructureShape',
            'map'       => 'ILABAmazon\Api\MapShape',
            'list'      => 'ILABAmazon\Api\ListShape',
            'timestamp' => 'ILABAmazon\Api\TimestampShape',
            'integer'   => 'ILABAmazon\Api\Shape',
            'double'    => 'ILABAmazon\Api\Shape',
            'float'     => 'ILABAmazon\Api\Shape',
            'long'      => 'ILABAmazon\Api\Shape',
            'string'    => 'ILABAmazon\Api\Shape',
            'byte'      => 'ILABAmazon\Api\Shape',
            'character' => 'ILABAmazon\Api\Shape',
            'blob'      => 'ILABAmazon\Api\Shape',
            'boolean'   => 'ILABAmazon\Api\Shape'
        ];

        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }

        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: '
                . print_r($definition, true));
        }

        $type = $map[$definition['type']];

        return new $type($definition, $shapeMap);
    }

    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }

    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}
