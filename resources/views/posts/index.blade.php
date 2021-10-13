<x-app-layout>
    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">
        <x-flash-message :message="session('notice')" />
        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($posts as $post)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('posts.show', $post) }}">
                        <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                            {{ $post->title }}</h2>
                        <h3>{{ $post->user->name }}</h3>
                        {{-- 投稿からの経過時間 --}}
                        @php
                            $time = date('Y-m-d H:i:s');
                            $createdTime = $post->created_at;
                            $elapsedTime = (int) abs((strtotime($createdTime) - strtotime($time)) / (60 * 60 * 24)); //
                        @endphp
                        <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            <span class="text-red-400 font-bold">
                                @if ($elapsedTime > 1 && $elapsedTime < 30)
                                    {{ '投稿からの経過時間:' . $elapsedTime . '日後' }}
                                @else
                                    {{ '投稿からの経過時間:' . $post->created_at->diffForHumans() }}
                                @endif
                            </span>
                        </p>
                        <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            <span
                                class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->created_at ? 'NEW' : '' }}</span>
                            {{ '記事作成日:' . $post->created_at }}
                        </p>
                        <img class="w-full mb-2" src="{{ $post->image_url }}" alt="">
                        <p class="text-gray-700 text-base">{{ Str::limit($post->body, 50) }}</p>
                        <p>お気に入り数:{{ $post->likes->count() }}</p>
                    </a>
                </article>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
</x-app-layout>
