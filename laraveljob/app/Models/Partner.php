<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'location', 'address', 'description', 'website', 'email'];
    public static function index()
    {
        $partnerArray = [];
        foreach (Partner::all() as $partner) {
            $partnerArray[] = [
                'id' => $partner->id,
                'company' => $partner->company,
                'location' => $partner->location,
                'address' => $partner->address,
                'website' => $partner->website,
                'email' => $partner->email,
                'description' => $partner->description,
            ];
        }
        return $partnerArray;
    }
}
