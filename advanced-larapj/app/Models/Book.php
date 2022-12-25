<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    public function getTitle(){//修正
        return 'ID'.$this->id . ':' . $this->title . ' 著者:' . optional($this->author)->name;
    }
    public function author(){//追記
				return $this->belongsTo('App\Models\Author');
    }

    public function relate(Request $request)
    {
        $hasbooks = Author::has('book')->get();
        $nobooks = Author::doesntHave('book')->get();
        $param = ['hasbooks' => $hasbooks, 'nobooks' => $nobooks];
        return view('author.index',$param);
    }
}

