<?php 
    

    // foreach($major as $majorParts)
    // {
    //     if($majorParts['chord'] == $key)
    //     {
    //         $firstId = $majorParts['id'];
    //         break;
    //     }
    // }
    // $majorFistId = $firstId;
    // $majorSecondId = $firstId + 2; //minor//
    // $majorThirdId = $firstId + 4; //minor//
    // $majorFourthId = $firstId + 5; 
    // $majorFifthId = $firstId + 7;
    // $majorSixthId = $firstId + 9; //minor//
    // $majorSeventhId = $firstId + 11; //minor//

    // $minorFirstId = $firstId;  //minor//
    // $minorSecondId = $firstId + 2; //minor//
    // $minorThirdId = $firstId + 3;
    // $minorFourthId = $firstId + 5; //minor//
    // $minorFifthId = $firstId + 7; //minor//
    // $minorSixthId = $firstId + 8;
    // $minorSeventhId = $firstId + 10;

    // $majorFirstChord = "";
    // $majorSecondChord = ""; //minor//
    // $majorThirdChord = ""; //minor//
    // $majorFourthChord = "";
    // $majorFifthChord = "";
    // $majorSixthChord = ""; //minor//
    // $majorSeventhChord = ""; //minor//

    // $minorFirstChord = ""; //minor//
    // $minorSecondChord = ""; //minor//
    // $minorThirdChord = ""; 
    // $minorFourthChord = ""; //minor//
    // $minorFifthChord = ""; //minor//
    // $minorSixthChord = "";
    // $minorSeventhChord = "";

    // foreach($major as $majorChord)
    // {
    //     if($majorChord['id'] == $majorFistId)
    //     {
    //         $majorFirstChord = $majorChord['chord'];
    //     }
    //     if($majorChord['id'] == $minorThirdId)
    //     {
    //         $minorThirdChord = $majorChord['chord'];
    //     }
    //     if($majorChord['id'] == $majorFourthId)
    //     {
    //         $majorFourthChord = $majorChord['chord'];
    //     }
    //     if($majorChord['id'] == $majorFifthId)
    //     {
    //         $majorFifthChord = $majorChord['chord'];
    //     }
    //     if($majorChord['id'] == $minorSixthId)
    //     {
    //         $minorSixthChord = $majorChord['chord'];
    //     }
    //     if($majorChord['id'] == $minorSeventhId)
    //     {
    //         $minorSeventhChord = $majorChord['chord'];
    //     }
    // }


    // foreach($minor as $minorChord)
    // {
    //     if($minorChord['id'] == $minorFirstId)
    //     {
    //         $minorFirstChord = $minorChord['chord'];
    //     }
    //     if($minorChord['id'] == $majorSecondId)
    //     {
    //         $majorSecondChord = $minorChord['chord'];
    //         $minorSecondChord = $minorChord['chord'];
    //     }
    //     if($minorChord['id'] == $majorThirdId)
    //     {
    //         $majorThirdChord = $minorChord['chord'];
    //     }
    //     if($minorChord['id'] == $minorFourthId)
    //     {
    //         $minorFourthChord = $minorChord['chord'];
    //     }
    //     if($minorChord['id'] == $minorFifthId)
    //     {
    //         $minorFifthChord = $minorChord['chord'];
    //     }
    //     if($minorChord['id'] == $majorSixthId)
    //     {
    //         $majorSixthChord = $minorChord['chord'];
    //     }
    //     if($minorChord['id'] == $majorSeventhId)
    //     {
    //         $majorSeventhChord = $minorChord['chord'];
    //     }
    // }

?>




<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('スケール照会') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">

                            <div class="flex flex-wrap w-full mb-6">
                                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">メジャースケール</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-20">
                                @foreach ($majorScale as $val)
                                <div class="xl:w-1/4 md:w-1/2 p-4">
                                    <div class="bg-gray-100 p-6 rounded-lg">
                                        <img class="rounded w-full h-full object-cover object-center mb-6" src="/img/chord/{{$val}}.jpg" alt="content">
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="flex flex-wrap w-full mb-6">
                                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">メジャーペンタトニックスケール</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                            </div>

                            <div class="flex flex-wrap -m-4 mb-20">
                                @foreach ($minorScaleP as $val)
                                    <div class="xl:w-1/4 md:w-1/2 p-4">
                                        <div class="bg-gray-100 p-6 rounded-lg">
                                            <img class="rounded w-full h-full object-cover object-center mb-6" src="/img/chord/{{$val}}.jpg" alt="content">
                                        </div>
                                    </div>
                                @endforeach
                            </div>



                            <div class="flex flex-wrap w-full mb-6">
                                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">マイナースケール</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                            </div>

                            <div class="flex flex-wrap -m-4">
                                @foreach ($minorScale as $val)
                                    <div class="xl:w-1/4 md:w-1/2 p-4">
                                        <div class="bg-gray-100 p-6 rounded-lg">
                                            <img class="rounded w-full h-full object-cover object-center mb-6" src="/img/chord/{{$val}}.jpg" alt="content">
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="flex flex-wrap w-full mb-6 mt-20">
                                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">マイナーペンタトニックスケール</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                            </div>

                            <div class="flex flex-wrap -m-4">
                                @foreach ($minorScaleP as $val)
                                    <div class="xl:w-1/4 md:w-1/2 p-4">
                                        <div class="bg-gray-100 p-6 rounded-lg">
                                            <img class="rounded w-full h-full object-cover object-center mb-6" src="/img/chord/{{$val}}.jpg" alt="content">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div> 
                    </section>



                    
                
            </div>
        </div>
    </div>
</x-app-layout>
