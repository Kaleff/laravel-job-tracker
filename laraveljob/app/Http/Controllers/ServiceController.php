<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($summary)
    {
        $allProjects = Service::index($summary);
        return response()->json($allProjects);
    }
    public function show($company)
    {
        $partnerProjects = Service::show($company, 'company');
        return response()->json($partnerProjects);
    }

    public function showProducts($product)
    {
        $providedServices = Service::show($product, 'type');
        return response()->json($providedServices);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'company' => 'required',
            'product' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);
        Service::create($formFields);
    }
}
