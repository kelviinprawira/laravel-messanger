<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Message extends Model
{
    use HasFactory;

    protected $casts = [
        'attachments' => 'array'
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function chat(): BelongsTo
    {

        return $this->belongsTo(Chat::class);
    }
    public function users(): BelongsTo
    {

        return $this->belongsTo(User::class);
    }

}
