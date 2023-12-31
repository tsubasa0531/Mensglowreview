<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ public function getPaginateByLimit(int $limit_count =10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
protected $fillable = [
    '製品名',
    '製品のクチコミ',
    '製品の値段'
    ];
    use HasFactory;
}
