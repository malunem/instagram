<x-html>
    <x-slot name="page_content">

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12"> 
                    @if ($user_posts)
                        @foreach ($user_posts as $user_post)
                            <div class="card mx-auto">
                                <img src="{{Storage::url($user_post->img)}}" class="card-img-top">
                                <div class="card-body text-start">
                                    <p class="card-text">{{$user_post->location ?? ''}}</p>
                                    <p class="card-text">@<strong>{{$user_post->name ?? 'username'}}</strong></p>
                                    <p class="card-text">{{$user_post->caption ?? ''}}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Nessun post da visualizzare.</p>
                    @endif
                </div>
            </div>
        </div>
    </x-slot>
</x-html>