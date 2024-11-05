<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; 

class Post extends Model
{
    public function up()
        {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->unsignedBigInteger('post_creator');
                $table->timestamps();
            });
        }

        protected $fillable = [
            'title',
            'description',
            'post_creator',
        ];
}
