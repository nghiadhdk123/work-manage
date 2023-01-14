<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Work;
use Carbon;
use Log;

class WorkService
{
    public function store(Request $request) {
        try {
            $data = $request->all();
            $work = new Work();
            $work->name = $data['name'];
            $work->status = 1;
            $work->created_at = Carbon::now("Asia/Ho_Chi_Minh");
            $work->save();
            
        } catch (\Exception $e) {
            Log::info($e->message);
        }
        

    }
}