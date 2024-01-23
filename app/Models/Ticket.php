<?php

namespace App\Models;

use App\Http\Classes\Enums\TicketStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'order_id'
    ];
    protected $attributes = [
        'status' => 'Open',
    ];

    #region Relations
    public function messages(): HasMany
    {
        return $this->hasMany(TicketMessage::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    #endregion
}
