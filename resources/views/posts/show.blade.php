<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/post.js')}}"></script>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿詳細') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- tailblock --}}
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto flex flex-col">
                          <div class="lg:w-4/6 mx-auto">

                            <div class="flex flex-col sm:flex-row mt-10">

                              <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">

                                <div class="flex flex-col items-center text-center justify-center">
                                  <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{$users->name}}</h2>
                                  <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-8"></div>
                                  <div>
                                      <p class="text-base mb-4">音楽歴：{{$users->history}}年</p>
                                      <p class="text-base">好きなアーティスト：{{$users->artist}}</p>
                                  </div>
                                </div>

                              </div>

                              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">

                                {{-- ↓後日ハートのマークに変更 --}}
                                {{-- <i class="fas fa-heart"></i> --}}
                                <div class="ml-60">
                                  <button id="nice" class="text-4xl" value="{{$posts->id}}">♡</button>
                                </div>
                                
                                <p class="leading-relaxed text-xl mb-4 underline">曲情報<br></p>
                                <p class="leading-relaxed text-lg">使用キー</p>
                                <p class="leading-relaxed text-lg mb-12 ml-16">{{$posts->main_key}}</p>

                                <p class="leading-relaxed text-lg">使用スケール</p>
                                <p class="leading-relaxed text-lg mb-12 ml-16">{{$posts->main_scale}}</p>

                                <p class="leading-relaxed text-lg">コード進行</p>
                                <p class="leading-relaxed text-lg mb-12 ml-16">{{$posts->progress_chord}}</p>

                                <p class="leading-relaxed text-lg">ポイント</p>
                                <p class="leading-relaxed text-lg mb-12 ml-16">{!! nl2br($posts->body) !!}</p>


                              

                                @if ($authUser->id == $posts->user_id) 
                                  <div class="my-10 ml-60">
                                    <a href="{{ route('posts.edit',['post'=>$posts->id]) }}" 
                                      class="text-indigo-500 inline-flex items-center">
                                      編集                                   
                                    </a>
                                    
                                    <br>
                                    <br>
                                    <form action="{{ route('posts.destroy',['post'=>$posts->id])}}" method="POST">
                                      @method('delete')
                                      @csrf
                                      <input type="submit" value="削除" onclick="return confirm('削除しますか？')" 
                                              class="text-indigo-500 inline-flex items-center">
                                    </form>

                                    {{-- tailwindの→の書き方（参考までに） --}}
                                    {{-- <a href="{{ route('posts.destroy',$posts->id) }}" class="text-indigo-500 inline-flex items-center">削除
                                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                      </svg>
                                    </a> --}}
                                  </div>
                                @endif
                                
                                

                              </div>

                            </div>
                          </div>
                        </div>
                      </section>
                    {{-- tailblock --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
