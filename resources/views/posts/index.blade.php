
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/post.js')}}"></script>
</head>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿情報') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-12 mx-auto">
                            <div class="flex flex-wrap w-full mb-6">
                                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">他の方々の投稿</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">ここでは他の方々の投稿を閲覧できます。<br>
                                                                                            沢山の投稿をみて、少しでも作曲のイメージが湧く手助けになれば幸いです！<br>
                                                                                            いつも沢山の投稿ありがとうございます！</p>
                            </div>
                        </div>


                        <div class="h-8 w-32 fixed bottom-14 right-14 hidden" id="newPost">
                            <a href="/posts/create" 
                                class="text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded md:text-lg">新規投稿</a>       
                        </div>
                       
                        
                        <div class="flex flex-wrap -m-2">
                            @if($posts)
                                @foreach($posts as $post)
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">   
                                    
                                    <a class=" block w-full h-full overflow-hidden" href="{{ route('posts.show',['post'=> $post->id]) }}">    

                                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">

                                            <div class="w-12 mr-4 flex-shrink-0 flex flex-col text-center leading-none">
                                                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">
                                                    {{ substr($post->created_at,5,2) }}
                                                </span>
                                                <span class="font-medium text-lg text-gray-800 title-font leading-none">
                                                    {{ substr($post->created_at,8,2) }}
                                                </span>
                                            </div>
                                            
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">{{$post->main_scale}}</h2>
                                                <p class="text-gray-500 w-32">{{ Str::limit($post->body,15,'...') }}</p>
                                            </div>
                                        </div>
                                    </a>   
                                </div>
                                @endforeach
                            @else
                            <!-- まだ検証してません -->
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full"> 
                                   <p class="text-gray-500 w-32">まだ投稿がありません。</p>
                                </div>
                            @endif
                        </div>

                        <div class="flex justify-center mt-8">
                                
                                {{-- {{$posts->links('vendor.pagination.bootstrap-contents')}} --}}
                                
                        </div>
                        
                          </div>

                    </section>



                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
