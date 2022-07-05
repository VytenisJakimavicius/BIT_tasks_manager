<?php

namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Task extends Model
{
    use Sortable;
    public $sortable = ['id', 'task_name', 'task_description', 'status_id',
                        'created_at', 'updated_at'];
    use HasFactory;
    public function taskstatus() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
        }
}
