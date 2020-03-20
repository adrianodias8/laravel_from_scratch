<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['body', 'due_date'];

    public function complete(array $attributes = [], bool $is_completed)
    {
        if (! $this->exists) {
            return false;
        }
        if ($is_completed){
            $d = new \DateTime();
            $this->completed_at = $d->format('Y-m-d H:i:s');
        }
        $this->fill($attributes);
        $this->save();
    }

    public function due(\DateTime $due_date)
    {
        $this->due_date = $due_date->format('Y-m-d H:i:s');
        $this->save();
    }

    public function path()
    {
        return route('assignments.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
