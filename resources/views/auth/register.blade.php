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
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="name" autocomplete="username">
                          </div>
                        <div class="mb-3">
                          <label class="form-label">Indirizzo email</label>
                          <input type="email" class="form-control" name="email" autocomplete="email">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" name="password" autocomplete="new-password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ripeti la password</label>
                            <input type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                          </div>
                        <button type="submit" class="btn btn-dark">Crea account</button>
                      </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-html>