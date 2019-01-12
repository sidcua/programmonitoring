<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Percentage;

class PercentageController extends Controller
{
    public function submitPercentage(Request $request, $semester){
        $this->validate($request, [
            'hei' => 'required|unique_with:percentage,program,semester',
            'program' => 'required',
            'percentage' => 'required|numeric|min:1|max:100',
        ]);
        // $record = Percentage::where([
        //     ['hei', $request->hei],
        //     ['program', $request->program],
        //     ['semester', $request->semester],
        // ])->count();
        // if($record > 0){
        //     return redirect('/percentage/'.$semester.'/add')->with('error', 'Percentage for this HEI, Program, and Sem is already existed');
        // }
        $percentage = new Percentage; 
        $percentage->fill($request->all());
        $percentage->save();
        return view('percentage.success')->with('semester', $semester);
    }
}
