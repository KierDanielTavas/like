<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    public function update(Request $request)
    {
        $count = $request->input('count');
        $counter = Counter::find(1); // Assuming your record has an id of 1

        if ($counter) {
            $counter->count = $count;
            $counter->save();
            return response('Count updated successfully', 200);
        } else {
            return response('Counter not found', 404);
        }
    }
}
