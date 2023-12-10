<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\DepartmentScope; 
class purchase extends Model
{
    use HasFactory;

    protected $table="purchases";
 
    protected $guarded=[];

    public function items()
    {
        return $this->hasMany(PurchaseItem::class,'purchase_id');
    }

    public function receive_challan()
    {
        return $this->hasMany(ReceiveChallan::class,'purchase_id');
    }
    
    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }

<<<<<<< HEAD
=======

>>>>>>> 9066209 (Hello)
    public function party(){
        return $this->belongsTo(Party::class)->withDefault([
            'party_name' => '',
        ]);
    }

<<<<<<< HEAD
=======
    public function purchase_by_employee(){
        return $this->belongsTo(Employee::class,'purchase_by')->withDefault([
            'employee_name' => '',
        ]);
    }

>>>>>>> 9066209 (Hello)
    public function department(){
        return $this->belongsTo(Department::class)->withDefault([
            'name' => '',
        ]);
    }

<<<<<<< HEAD
    public function receive_status(){

        $delivery_status = $this->receive_challan()->count() == 0 ? 0 : 1;

        $this->update([
            'delivery_status' => $delivery_status
        ]);
    }


=======
>>>>>>> 9066209 (Hello)
    public function update_paid()
    {
        $this->update([
            'paid' => $this->payments()->sum('amount')
        ]);
    }

<<<<<<< HEAD
    public function update_calculated_data(){
        // update paid
        $this->update_paid();

        $total=$this->payable - $this->paid;
        $this->update([
            'due' => $total,
=======
    public function update_delivery_qty()
    {
        $total = $this->items()->sum('qty');
        $delivery=$this->items()->sum('delivery_qty');
        $due= $total - $delivery;

        if($due <= 0){
            $d_status="Delivered";
        }else{
            $d_status="Not Delivered";
        }

        $this->items->each(function ($Item) {
            $Item->update_delivery_qty();
        });

        $this->update([
            'total_qty' => $total,
            'delivery_qty' => $delivery,
            'due_qty' => $due,
            'delivery_status' => $d_status,
        ]);

    }

    public function update_calculated_data(){
        // update paid
        $this->update_paid();
        $this->update_delivery_qty();

        $this->items->each(function ($Item) {
            $Item->update_calculated_data();
        });

        $final_payable=$this->final_payable - $this->returned;
        
        $this->update([
            'final_payable' => $final_payable,
        ]);

        $due = $this->final_payable - $this->paid;

        if($due < 0){
            $status="Paid";
        }else{
            $status="Unpaid"; 
        }

        $this->update([
            'due' => $due,
            'payment_status' => $status,
>>>>>>> 9066209 (Hello)
        ]);
        
    }

    public function filter($request, $purchases)
    {
        if ($request->party_id != null) {
            $purchases = $purchases->where('id', $request->party_id);
        }

        if ($request->purchase_form != null) {
            $purchases = $purchases->where('purchase_form', $request->purchase_form);
        }

        if ($request->phone != null) {
            $purchases = $purchases->where('phone', $request->phone);
        }

        if ($request->purchase_by != null) {
            $purchases = $purchases->where('purchase_by', $request->purchase_by);
        }

        if ($request->department != null) {
            $purchases = $purchases->where('department_id', $request->department);
        }

        if ($request->has('purchase_date')) {
            $dateRange = explode(' - ', $request->input('purchase_date'));
            if (isset($dateRange[1])) {
                $startDate = date('Y-m-d', strtotime($dateRange[0]));
                $endDate = date('Y-m-d', strtotime($dateRange[1]));
                $purchases = $purchases->whereBetween('purchase_date', [$startDate, $endDate]);
            }
        }

        if ($request->has('delivery_date')) {
            $dateRange = explode(' - ', $request->input('delivery_date'));
            if (isset($dateRange[1])) {
                $startDate = date('Y-m-d', strtotime($dateRange[0]));
                $endDate = date('Y-m-d', strtotime($dateRange[1]));
                $purchases = $purchases->whereBetween('delivery_date', [$startDate, $endDate]);
            }
        }

        return $purchases;
    }

    static function booted()
    {
        static::addGlobalScope(new DepartmentScope);
    }

     // Don't delete if any relation is existing
     protected static function boot()
     {
         parent::boot();
         static::deleting(function ($rel) {
             $relationMethods = ['receive_challan'];
 
             foreach ($relationMethods as $relationMethod) {
                 if ($rel->$relationMethod()->count() > 0) {
                     return false;
                 }
             }
         });
     }
    

}
