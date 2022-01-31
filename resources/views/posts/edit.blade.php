<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規投稿') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                {{-- tailblock --}}
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-16 py-12 md:flex-row flex-col items-center">
                      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">

                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">既に投稿した内容を変更します。</h1>
                        <p class="mb-8 leading-relaxed">以下の記入欄に入力して、変更をお願い致します。</p>

                        <form action="{{ route('posts.update',['post'=>$posts->id]) }}" enctype="multipart/form-data" method="POST">
                            @method('PATCH')
                            @csrf

                            <div class="flex w-full md:justify-start justify-center items-end mt-5">
                                <div class="relative mr-4 md:w-1/2 lg:w-1/2 xl:w-1/2 w-2/4">
                                    <label for="hero-field" class="leading-7 text-sm text-gray-600">使用キー</label>
                                    <input type="text" name="main_key" value="{{$posts->main_key}}" 
                                        class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <p class="text-sm mt-2 text-gray-500 mb-8 w-full">
                                @if($errors->has('main_key'))
                                    <span class="text-red-500">{{ $errors->first('main_key') }}</span>
                                @endif
                            </p>

                            <div class="flex w-full md:justify-start justify-center items-end">
                                <div class="relative mr-4 md:w-full lg:w-full w-2/4">
                                    <label for="hero-field" class="leading-7 text-sm text-gray-600">使用スケール</label>
                                    <input type="text" name="main_scale" value="{{$posts->main_scale}}" 
                                        class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <p class="text-sm mt-2 text-gray-500 mb-8 w-full">
                                @if($errors->has('main_scale'))
                                    <span class="text-red-500">{{ $errors->first('main_scale') }}</span>
                                @endif
                            </p>

                            <div class="flex w-full md:justify-start justify-center items-end">
                                <div class="relative mr-4 md:w-full lg:w-full w-2/4">
                                    <label for="hero-field" class="leading-7 text-sm text-gray-600">コード進行</label>
                                    <input type="text" name="progress_chord" value="{{$posts->progress_chord}}" 
                                        class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <p class="text-sm mt-2 text-gray-500 mb-8 w-full">
                                @if($errors->has('progress_chord'))
                                    <span class="text-red-500">{{ $errors->first('progress_chord') }}</span>
                                @endif
                            </p>

                            <div class="flex w-full md:justify-start justify-center items-end">
                                <div class="relative mr-4 md:w-full lg:w-full w-2/4">
                                    <label for="hero-field" class="leading-7 text-sm text-gray-600">曲のポイント</label>
                                    <textarea class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" 
                                            name="body">{{$posts->body}}</textarea>
                                </div>
                            </div>
                            <p class="text-sm mt-2 text-gray-500 mb-8 w-full">
                                @if($errors->has('body'))
                                    <span class="text-red-500">{{ $errors->first('body') }}</span>
                                @endif
                            </p>

                            <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録</button>
                            
                        </form>

                      </div>
                    </div>
                </section>
                {{-- tailblock --}}



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
