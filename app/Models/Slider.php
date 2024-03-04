<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\{BelongsTo};
use App\Models\Traits\HasImage;
class Slider extends BaseModel {
    use Translatable, HasImage;
    protected $table = "sliders";
    protected $fillable = ['status','uuid', 'admin_id'];
    protected $with = ['translations'];
    protected $casts = ['status' => 'boolean',];
    public $translatedAttributes = ['title', 'description'];

    public function status() {
        switch ($this->status) {
            case 0: $result = '<label class="badge badge-warning">' . trans('dashboard/general.not_active') .'</label>'; break;
            case 1: $result = '<label class="badge badge-success">' . trans('dashboard/general.active') .'</label>'; break;
        }
        return $result;
    }

     public function admin(): BelongsTo {
        return $this->belongsTo(related:Admin::class, foreignKey:'admin_id');
    }

    public function scopeActive($query) {
        return $query->whereStatus(true) ;
    }
}