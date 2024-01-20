<?php

// app/Models/Events.php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\Laravel\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['event_name', 'description', 'date', 'location'];

    public function getEvents()
    {
        return DB::collection('events')->orderBy('date', 'asc')->get();
    }

    public function saveEvent($data)
    {
        return $this->create($data);
    }

    public function deleteEvent($id)
    {
        return $this->findOrFail($id)->delete(); 
    }

    public function updateEvent($id)
    {
        return $this->findOrFail($id); 
    }

    public function updatedEvent($data, $id)
    {
        return $this->findOrFail($id)->update($data); 
    }

    
}

