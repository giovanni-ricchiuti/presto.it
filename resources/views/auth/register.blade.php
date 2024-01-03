<x-layout-main>

    <div class="container row card-login card-ombra-registrati-login p-0 m-0">
        <div class="col-lg-4 col-12 mx-auto">

            <div>
                <div class="card-header d-flex justify-content-center text-center">
                {{__('ui.registrati')}}
                </div>
                <div class="card-body">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 d-flex">
                                <label for="name" class="text-center justify-content-center p-2 label-login">{{__('ui.nome')}}</label>
                                <input type="text" name="name" id="name" class="form-control rounded-0 "
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 d-flex">
                                <label for="email"
                                    class="text-center justify-content-center p-2 label-login">Email</label>
                                <input type="email" name="email" id="email" class="form-control rounded-0 "
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 d-flex">
                                <label for="password"
                                    class="text-center justify-content-center p-2 label-login">Password</label>
                                <input type="password" name="password" id="password" class="form-control rounded-0 ">
                                @error('password')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 d-flex">
                                <label for="password_confirmation"
                                    class="text-center justify-content-center p-2 label-login">{{__("ui.confermaPassword")}}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control rounded-0 ">
                            </div>
                            <div class="col-12 d-flex justify-content-between align-items-center mt-5 mb-5">
                                <p class="my-0 small">{{__('ui.seiGiaReg')}} <a href="/login" class="link small">{{__('ui.accedi')}}</a></p>
                                <button type="submit" class="btn-accedi">{{__('ui.registrati')}}</button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
            
        </div>
    </div>

</x-layout-main>
