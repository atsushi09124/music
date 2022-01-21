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
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                            </div>

                            <div class="mb-20 max-w-6xl">
                                <img class="rounded" src="/img/parts/title1.jpg">
                            </div>

                            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="sm:text-3xl font-medium title-font mb-2 text-gray-900 text-xl">使用するキーの選択</h1>
                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                            </div>

                            {{-- <div class="w-full flex">

                                <div class="w-40">
                                    <input type="submit" value="C" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    <input type="submit" value="C#" class="flex mx-auto mt-16 text-white w-20 bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
                                </div>
                                <div class="w-40">
                                    <input type="submit" value="D" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    <input type="submit" value="D#" class="flex mx-auto mt-16 text-white w-20 bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
                                </div>
                                <div class="w-40">
                                    <input type="submit" value="E" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                </div>
                                <div class="w-40">
                                    <input type="submit" value="F" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    <input type="submit" value="F#" class="flex mx-auto mt-16 text-white w-20 bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
                                </div>
                                <div class="w-40">
                                    <input type="submit" value="G" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    <input type="submit" value="G#" class="flex mx-auto mt-16 text-white w-20 bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
                                </div>
                                <div class="w-40">
                                    <input type="submit" value="A" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    <input type="submit" value="A#" class="flex mx-auto mt-16 text-white w-20 bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
                                </div>
                                <div class="w-40">
                                    <input type="submit" value="B" class="flex mx-auto mt-16 text-white w-20 bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                </div>

                            </div> --}}

                            <div class="w-full flex justify-center">
                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10 mx-auto">
                                        <a class=" block w-full h-full overflow-hidden" href=""></a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 mx-auto">
                                        <a class=" block w-full h-full overflow-hidden" href=""></a>
                                    </div>
                                </div>

                                <div class="w-20 mx-auto">
                                    <div class="h-12 w-full bg-indigo-500 border-0 my-10">
                                        <a class=" block w-full h-full overflow-hidden" href=""></a>
                                    </div>
                                    <div class="h-12 w-full bg-purple-500 border-0 my-10 mx-auto">
                                        <a class=" block w-full h-full overflow-hidden" href=""></a>
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
