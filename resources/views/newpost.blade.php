<x-html>
    <x-slot name="page_content">
        <div class="container-fluid">

            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>    
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row mt-5">
                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                    <form action="{{route('uploadPost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="text" name="location" id="location" placeholder="Aggiungi luogo" class="form-control mt-3">

                        <div id="pic_placeholder mt-3">
                            <input type="file" name="img" accept="image/*" class="form-control mt-3">
                        </div>

                        <div>
                            <textarea name="caption" id="caption" placeholder="Scrivi una didascalia..." class="form-control mt-3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-dark mt-5">Pubblica</button>

                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-html>