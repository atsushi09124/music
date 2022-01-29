<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Minor;

class ScaleController extends Controller
{
    
    public function Scale($key)
    {
        //major 0 +2 +4 +5 +7 +9 +11
        //minor 0 +2 +3 +5 +7 +8 +10
        $getKey = Major::where('chord','=',$key)->first();

        $majorFirstId = $getKey->id;
        $majorSecondId = $majorFirstId + 2; //minor//
        $majorThirdId = $majorFirstId + 4; //minor//
        $majorFourthId = $majorFirstId + 5; 
        $majorFifthId = $majorFirstId + 7;
        $majorSixthId = $majorFirstId + 9; //minor//
        $majorSeventhId = $majorFirstId + 11; //minor//

        $minorFirstId = $majorFirstId;  //minor//
        $minorSecondId = $minorFirstId + 2; //minor//
        $minorThirdId = $minorFirstId + 3;
        $minorFourthId = $minorFirstId + 5; //minor//
        $minorFifthId = $minorFirstId + 7; //minor//
        $minorSixthId = $minorFirstId + 8;
        $minorSeventhId = $minorFirstId + 10;

        $majorSecondChord = Minor::where('id','=',$majorSecondId)->first(); //minor//
        $majorThirdChord = Minor::where('id','=',$majorThirdId)->first(); //minor//
        $majorFourthChord = Major::where('id','=',$majorFourthId)->first();
        $majorFifthChord = Major::where('id','=',$majorFifthId)->first();
        $majorSixthChord = Minor::where('id','=',$majorSixthId)->first(); //minor//
        $majorSeventhChord = Minor::where('id','=',$majorSeventhId)->first(); //minor//

        $minorFirstChord = Minor::where('id','=',$minorFirstId)->first(); //minor//
        $minorSecondChord = Minor::where('id','=',$minorSecondId)->first(); //minor//
        $minorThirdChord = Major::where('id','=',$minorThirdId)->first(); 
        $minorFourthChord = Minor::where('id','=',$minorFourthId)->first(); //minor//
        $minorFifthChord = Minor::where('id','=',$minorFifthId)->first(); //minor//
        $minorSixthChord = Major::where('id','=',$minorSixthId)->first();
        $minorSeventhChord = Major::where('id','=',$minorSeventhId)->first();

        $majorScale = [
            'major1' => $getKey->chord,
            'major2' => $majorSecondChord->chord,
            'major3' => $majorThirdChord->chord,
            'major4' => $majorFourthChord->chord,
            'major5' => $majorFifthChord->chord,
            'major6' => $majorSixthChord->chord,
            'major7' => $majorSeventhChord->chord
        ];

        $majorScaleP = [
            'major1' => $getKey->chord,
            'major2' => $majorSecondChord->chord,
            'major3' => $majorThirdChord->chord,
            'major5' => $majorFifthChord->chord,
            'major6' => $majorSixthChord->chord
        ];

        $minorScale = [
            'minor1' => $minorFirstChord->chord,
            'minor2' => $minorSecondChord->chord,
            'minor3' => $minorThirdChord->chord,
            'minor4' => $minorFourthChord->chord,
            'minor5' => $minorFifthChord->chord,
            'minor6' => $minorSixthChord->chord,
            'minor7' => $minorSeventhChord->chord
        ];

        $minorScaleP = [
            'minor1' => $minorFirstChord->chord,
            'minor3' => $minorThirdChord->chord,
            'minor4' => $minorFourthChord->chord,
            'minor5' => $minorFifthChord->chord,
            'minor7' => $minorSeventhChord->chord
        ];

        return view('scales.scale',compact('majorScale','majorScaleP','minorScale','minorScaleP'));

    }
    
}
