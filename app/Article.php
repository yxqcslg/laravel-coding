<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','content','slug','published_at','user_id','category_id'];

    /**
     * 返回该文章的作者
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * 返回该文章的分类
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo('App\Category');
    }

    /**
     * 返回该文章的所有标签
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tags(){
        return $this->belongsTo('App\Tag');
    }
}
