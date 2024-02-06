<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function increment()
    {
    $counter = Counter::firstOrCreate([], ['value' => 0]);
    $counter->increment('value');
    return redirect()->route('counter.show')->with('status', 'Incremented successfully!');
    }

    public function decrement()
    {
    $counter = Counter::firstOrCreate([], ['value' => 0]);
    $counter->decrement('value');
    return redirect()->route('counter.show')->with('status', 'Decremented successfully!');
    }


    public function show()
    {
    $counter = Counter::firstOrCreate([], ['value' => 0]);
    return view('counter', ['counter' => $counter]);
    }

}
