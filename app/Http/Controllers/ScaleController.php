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
            $getKey->chord,
            $majorSecondChord->chord,
            $majorThirdChord->chord,
            $majorFourthChord->chord,
            $majorFifthChord->chord,
            $majorSixthChord->chord,
            $majorSeventhChord->chord
        ];

        $majorScaleP = [
            $getKey->chord,
            $majorSecondChord->chord,
            $majorThirdChord->chord,
            $majorFifthChord->chord,
            $majorSixthChord->chord
        ];

        $minorScale = [
            $minorFirstChord->chord,
            $minorSecondChord->chord,
            $minorThirdChord->chord,
            $minorFourthChord->chord,
            $minorFifthChord->chord,
            $minorSixthChord->chord,
            $minorSeventhChord->chord
        ];

        $minorScaleP = [
            $minorFirstChord->chord,
            $minorThirdChord->chord,
            $minorFourthChord->chord,
            $minorFifthChord->chord,
            $minorSeventhChord->chord
        ];
        return view('scales.scale',compact('majorScale','majorScaleP','minorScale','minorScaleP'));

    }
    
}
