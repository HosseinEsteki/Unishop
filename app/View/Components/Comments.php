<?php

namespace App\View\Components;

use App\Http\Classes\ConvertToArray;
use App\Http\Classes\Enums\CommentStatus;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Comments extends Component
{
    /*
     * Collection of Comment
     */
    public ?array $comments;

    public function __construct(Collection $comments)
    {
        $this->comments = ConvertToArray::commentsToArray($comments->where('status', CommentStatus::Accepted->name));
    }

    public function render(): View
    {
        return view('components.comments');
    }

    public static function buildCommentItems($comments): View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.comments', compact('comments'));
    }
}
