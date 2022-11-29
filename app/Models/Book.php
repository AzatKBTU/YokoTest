<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $description
 * @property ?string $author
 * @property Carbon $created_at
 */
final class Book extends Model
{
    use HasFactory;

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setAuthor(null|string $author) {
        $this->author = $author;
    }

    public function setTime(null|string $createdAt) {
        $this->created_at = Carbon::parse($createdAt);
    }
}
