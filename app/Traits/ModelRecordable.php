<?php

namespace App\Traits;

use App\Contracts\Recordable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait ModelRecordable
{
    /**
     * Boot the trait.
     *
     * @return void
     */
    public static function bootModelRecordable()
    {
        static::created(function (Model $model) {
            $model->recordChange('created');
        });

        static::updated(function (Model $model) {
            $model->recordChange('updated');
        });

        static::deleted(function (Model $model) {
            $model->recordChange('deleted');
        });
    }

    /**
     * Record a change to the model.
     *
     * @param string $event
     * @return void
     */
    protected function recordChange(string $event)
    {
        if (!in_array($event, $this->getRecordableEvents())) {
            return;
        }

        $changes = $this->getDirty();
        $recordableChanges = array_intersect_key($changes, array_flip($this->getRecordableAttributes()));

        if (empty($recordableChanges)) {
            return;
        }

        // Here you can implement your own recording logic
        // For example, storing changes in a separate table
        // or logging them to a file
    }

    /**
     * Get the model's recordable attributes.
     *
     * @return array
     */
    public function getRecordableAttributes(): array
    {
        return $this->recordable ?? [];
    }

    /**
     * Get the model's recordable events.
     *
     * @return array
     */
    public function getRecordableEvents(): array
    {
        return $this->recordableEvents ?? ['created', 'updated', 'deleted'];
    }
} 