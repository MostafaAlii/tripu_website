<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SliderTranslation extends Model {
    protected $table ='slider_translations';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}