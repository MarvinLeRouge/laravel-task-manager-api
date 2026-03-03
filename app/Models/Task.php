<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'description', 'status', 'priority', 'due_date'];

    public static array $statuses = [
        'todo'        => 'À faire',
        'in_progress' => 'En cours',
        'done'        => 'Terminé',
    ];

    public static array $priorities = [
        'low'    => 'Basse',
        'medium' => 'Moyenne',
        'high'   => 'Haute',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}