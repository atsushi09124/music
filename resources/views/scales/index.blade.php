<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('使用スケールの選択') }}
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
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Support Make Music<br>弾き語り作曲支援サイト</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">弾き語り作曲支援サイトへようこそ！<br>
                                                                                            このサイトでは、選択したキーに対応する音を閲覧することができます。<br>
                                                                                            用意しているスケールはメジャー、マイナースケール（ペンタトニック含む）になります。<br>
                                                                                            表示スケールはペンタトニック含め４つになりますので、他のスケールを参考にしたい場合は他のユーザー様の投稿の閲覧をお願い致します。</p>
                            </div>

                            <div class="mb-20 max-w-6xl">
                                <img class="rounded" src="/img/parts/title1.jpg">
                            </div>

                            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="sm:text-3xl font-medium title-font mb-2 text-gray-900 text-xl">使用するキーの選択</h1>
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'C']) }}" >C</a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'Cs']) }}">C#</a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'D']) }}">D</a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'Ds']) }}">D#</a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'E']) }}">E</a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'F']) }}">F</a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'Fs']) }}">F#</a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'G']) }}">G</a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'Gs']) }}">G#</a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'A']) }}">A</a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'As']) }}">A#</a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 rounded-lg py-2 shadow-lg">
                                        <a class=" block w-full h-full overflow-hidden text-white text-2xl text-center" href="{{ route('scales.scale',['key'=>'B']) }}">B</a>
                                    </div>
                                </div>

                            </div>



                            </div>
                        </div>
                    </section>



                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
