<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author() {
        //dove abbiamo la foreign key
        return $this->belongsTo(AuthorDetail::class);
    }
}
