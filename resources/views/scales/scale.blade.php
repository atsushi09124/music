
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
                                @foreach ($majorScaleP as $val)
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
