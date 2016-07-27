<?php

namespace FeodBundle\Naming;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\DirectoryNamerInterface;

/**
 * OrignameNamer
 *
 */
class DirectoryNamer implements DirectoryNamerInterface
{
    /**
     * {@inheritDoc}
     */
    public function directoryName($object, PropertyMapping $mapping)
    {
        return $object->getMunition()->getClassName();
    }
}
