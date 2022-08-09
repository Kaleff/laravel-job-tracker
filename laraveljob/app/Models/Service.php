<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'product', 'type', 'description', 'price', 'quantity', 'date'];
    public static function index($summary)
    {
        if($summary != 'type' and $summary != 'company') {
            return response()->json(['message' => 'Invalid parameter'], 404);
        }
        $allProjects = Service::orderBy($summary)
                            ->get();
        return $allProjects;
    }
    public static function show($company, $filter)
    {
        $queryResult = Service::where($filter, $company)
                            ->orderBy('id')
                            ->get();
        return $queryResult;
    }
}
