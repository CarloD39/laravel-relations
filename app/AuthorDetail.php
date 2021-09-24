<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function article() {
        //dove NON abbiamo la foreign key
        return $this->hasOne(Article::class);
    }   
}
