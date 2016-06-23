<?php

namespace Yaoi\Schema;


class AdditionalProperties extends AbstractConstraint implements Constraint
{
    const KEY = 'additionalProperties';

    /**
     * @var Schema
     */
    public $propertiesSchema;

    public $isAllowed = true;

    public function __construct($schemaValue, Schema $ownerSchema = null)
    {
        if (false === $schemaValue) {
            $this->isAllowed = false;
        } elseif (true === $schemaValue) {
            $this->propertiesSchema = new Schema(array(), $ownerSchema);
        } else {
            $this->propertiesSchema = new Schema($schemaValue, $ownerSchema);
        }
    }

}