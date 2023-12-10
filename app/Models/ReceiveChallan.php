<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\DepartmentScope; 

class ReceiveChallan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function purchase()
    {
        return $this->belongsTo(purchase::class, 'purchase_id');
    }

    public function items()
    {
        return $this->hasMany(ReceiveChallanItem::class,'receive_challan_id');
    }

    public function party(){
        return $this->belongsTo(Party::class)->withDefault([
            'party_name' => '',
        ]);
    }

<<<<<<< HEAD
=======
    public function department(){
        return $this->belongsTo(Department::class)->withDefault([
            'name' => '',
        ]);
    }

    public function order_by_employee(){
        return $this->belongsTo(Employee::class,'order_by')->withDefault([
            'employee_name' => '',
        ]);
    }

    public function receive_by_employee(){
        return $this->belongsTo(Employee::class,'receive_by')->withDefault([
            'employee_name' => '',
        ]);
    }

>>>>>>> 9066209 (Hello)
    static function booted()
    {
        static::addGlobalScope(new DepartmentScope);
    }

    public static function boot()
    {
        parent::boot();

        static::saved(function ($challan) {
<<<<<<< HEAD
            $challan->purchase->receive_status();
=======
            $challan->purchase->update_calculated_data();
>>>>>>> 9066209 (Hello)
        });

        static::deleting(function ($challan) {
            foreach ($challan->items as $item) {
                $item->delete();
            }
        });
<<<<<<< HEAD
=======
        
>>>>>>> 9066209 (Hello)
    }

}
