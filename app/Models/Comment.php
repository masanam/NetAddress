<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
}
