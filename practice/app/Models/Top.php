<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    public function selectAll(){
        $query - \DB::table('product')->select('id','name','prace','stock')->get();
        return $query;
    }
    use HasFactory;
}
