<?php

namespace FeodBundle\Naming;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\NamerInterface;

/**
 * AmorcageNamer
 *
 */
class AmorcageNamer implements NamerInterface
{
    /**
     * {@inheritDoc}
     */
    public function name($object, PropertyMapping $mapping)
    {

        $file = $mapping->getFile($object);

        $amorcage = $object->getAmorcage();

        $name = $amorcage->fileName();

        if ($extension = $this->getExtension($file)) {
            $name = sprintf('%s.%s', $name, $extension);
        }

        return $name;
    }

    protected function getExtension(UploadedFile $file)
    {
        $originalName = $file->getClientOriginalName();

        if ($extension = pathinfo($originalName, PATHINFO_EXTENSION)) {
            return $extension;
        }

        if ($extension = $file->guessExtension()) {
            return $extension;
        }

        return null;
    }
}
