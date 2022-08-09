<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class PartnerController extends Controller
{
    public function index()
    {
        $partnerArray = Partner::index();
        return response()->json($partnerArray);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'company' => ['required', Rule::unique('partners','company')],
            'location' => 'required',
            'address' => 'required',
            'description' => 'required',
            'website' => 'required',
            'email' => ['required', Rule::unique('partners','email', 'email')]
        ]); 
        Partner::create($formFields);
    }
}
