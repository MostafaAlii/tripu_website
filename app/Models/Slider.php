<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\{BelongsTo};
class Slider extends BaseModel {
    use Translatable;
    protected $table = "sliders";
    protected $fillable = ['status','uuid', 'admin_id'];
    protected $with = ['translations'];
    protected $casts = ['status' => 'boolean',];
    public $translatedAttributes = ['title', 'description'];

    public  function status(){
        echo ($this->status == 0) ?  '<button class="btn btn-outline-danger">'.trans('dashboard/general.not_active').'</button>' : '<button class="btn btn-outline-success">'.trans('dashboard/general.active').'</button>';
    }

     public function admin(): BelongsTo {
        return $this->belongsTo(related:Admin::class, foreignKey:'admin_id');
    }
}
