<?php

namespace App\Contracts;

interface Recordable
{
    /**
     * Get the model's recordable attributes.
     *
     * @return array
     */
    public function getRecordableAttributes(): array;

    /**
     * Get the model's recordable events.
     *
     * @return array
     */
    public function getRecordableEvents(): array;
} 