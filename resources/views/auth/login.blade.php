<x-html>
    <x-slot name="page_content">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row mt-5">
                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Indirizzo email</label>
                          <input type="email" class="form-control" name="email" autocomplete="email">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" name="password" autocomplete="password">
                        </div>
                        <div>
                            <button type="submit" class="btn">Login</button>
                            <a href="/register"><button type="button" class="btn ms-auto">Registrati</button></a>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-html>