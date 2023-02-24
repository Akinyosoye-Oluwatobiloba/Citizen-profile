<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;

class CitizenController extends Controller
{
    public function index()
    {
        return view('citizens');
    }

    public function search(Request $request)
    {
        $citizens = Citizen::where('name', 'like', '%' . $request->input('search') . '%')
                            ->orWhere('id', $request->input('search'))
                            ->orWhere('gender', $request->input('search'))
                            ->get();
        return view('citizens', ['citizens' => $citizens]);
    }

    public function show($id)
    {
        $citizen = Citizen::find($id);
        return view('citizen', ['citizen' => $citizen]);
    }
}
