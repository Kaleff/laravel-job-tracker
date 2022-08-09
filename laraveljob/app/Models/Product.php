<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function index()
    {
        $productArray = [];
        foreach (Product::all() as $product) {
            $productArray[] = [
                'id' => $product->id,
                'title' => $product->title,
                'type' => $product->type,
                'description' => $product->description
            ];
        }
        return $productArray;
    }
}
