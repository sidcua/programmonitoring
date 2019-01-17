<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Session;

class FeedbackController extends Controller
{
    public function selectOffice(Request $request){
        $office = $request->office;
        if ($office){
            session()->put('office', $office);
        }
        return response()->json($office);
    }

    public function submitFeedback(Request $request){
        $feedback = new Feedback;
        $feedback->fill($request->all());
        $feedback->office = session()->get('office');
        $feedback->save();
        return response()->json($feedback);
    }

}
