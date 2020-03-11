<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ActionController extends Controller
{
    public function runSystemFunc()
    {
        if (Auth::user()->can('system-only')) {
            return view('success');
        } else {
            abort(403, 'Unauthorized action.');
        }

    }

    public function runAdminFunc()
    {
        if (Auth::user()->can('admin-higher')) {
            return view('success');
        } else {
            return response()->json(['error' => 'Not authorized.'], 403);
        }

    }
}
