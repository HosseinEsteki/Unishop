<?php

namespace App\Models;

use App\Http\Classes\EnumConvert;
use App\Http\Classes\Enums\PhotoPath;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class Photo extends Model
{
    use HasFactory;

    private string $photoFormat = 'jpg';
    protected $fillable = [
        'model'
    ];
    protected $attributes = [
        'priority' => 0,
        'alt' => null
    ];

    #region functions
    public function getUrl(): string
    {
        $photoModel = $this->model;
        $path = '';
        switch ($photoModel) {
            case PhotoPath::Product->name:
                $path = PhotoPath::Product->value;
                break;
            case PhotoPath::Category->name:
                $path = PhotoPath::Category->value;
                break;
            case PhotoPath::User->name:
                $path = PhotoPath::User->value;
                break;
            case PhotoPath::Theme->name:
                $path = PhotoPath::Theme->value;
                break;

            default:
                return '';
        }
        return Storage::url('public' . $path);
    }

    #endregion
    #region Attributes
    protected function path(): Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->getUrl()}$this->id.{$this->photoFormat}",
        );
    }

    protected function thumbnailPath(): Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->getUrl()}thumbnail/$this->id.{$this->photoFormat}",
        );
    }
    #endregion
    #region Relations
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    #endRegion
}
