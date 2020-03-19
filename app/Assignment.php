<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete()
    {
        $d = new \DateTime();
        $this->completed_at = $d->format('Y-m-d H:i:s');
        $this->save();
    }

    public function due(\DateTime $due_date)
    {
        $this->due_date = $due_date->format('Y-m-d H:i:s');
        $this->save();
    }
}
