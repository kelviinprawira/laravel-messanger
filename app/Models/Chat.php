<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'chat_user',);
    }

    public function usersInChat()
    {
        return $this->users()->where('user_id', '!=', auth()->id())->get();
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
