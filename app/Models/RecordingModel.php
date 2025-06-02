<?php

namespace App\Models;

use App\Contracts\Recordable as RecordableInterface;
use App\Traits\ModelRecordable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecordingModel.
 */
abstract class RecordingModel extends Model implements RecordableInterface
{
    use ModelRecordable;
}
