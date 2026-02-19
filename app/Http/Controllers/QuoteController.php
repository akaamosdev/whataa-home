<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'plan' => 'required|in:starter,business,web,both',
            'message' => 'nullable|string|max:1000',
        ]);
        DB::table('nb_downloads')->insert([
            'plan' => 'Devis',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Quote::create($validated);

        return back()->with('success', 'Devis demandé avec succès!');
    }
    public function countDownload(Request $request)
    {
        DB::table('nb_downloads')->insert([
            'plan' => $request->input('plan'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
