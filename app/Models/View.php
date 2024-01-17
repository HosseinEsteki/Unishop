<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class View extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'product_id',
        'user_id'
    ];

    #region Bootable
    protected static function boot()
    {
        parent::creating(function (View $view) {
            $userId = null;
            if (Auth::check()) {
                $userId = Auth::id();
            }
            $ip = Request::ip();
            $view->user_id = $userId;
            $view->ip_address = $ip;
            $lastView = View::where('ip_address', $ip)->orderByDesc('id')->first();
            /*
             * If customer visits the same page twice in less than 30 minutes, cancel process
             */
            if ($lastView->created_at > now()->subMinutes(30)) {
                return false;
            }
            return true;
        });
        parent::boot();
    }
    #endregion
    #region Relations
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    #endregion
}
