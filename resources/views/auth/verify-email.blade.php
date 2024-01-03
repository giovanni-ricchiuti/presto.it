<x-layout-main>

    
    
        
        <div class="container-md card-login card-ombra-registrati-login p-0 m-0">
            <div class="row p-5 text-center">
                
                    <div class="col-12">

                        <h1>{{__('ui.regSuc')}}</h1>
                        <p class="lead"><dt class="text-black">{{__('ui.mailReg')}}</dt></p>
                    </div>
                
                    <div class="">
                    {{__('ui.notMail')}}
                
                        <form action="/email/verification-notification" method="POST" class="mt-3">
                            @csrf
                            <button class="btn btn-accedi">{{__('ui.verMail')}}</button>
                        </form>
                    </div>
                
            </div>
        </div>

</x-layout-main>