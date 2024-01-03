<x-layout-main>

    <div class="container box-title p-3">
        <h1 class="fw-bold text-center display-4 box-title-page-mobile">{{__('ui.gestisciUtenti')}}</h1>
        
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center mt-5 mx-0  px-0 pb-5 container-home-card-category position-abslolute">

        {{-- <h1 class="fw-bold text-center display-4 text-black">{{__('ui.gestisciUtenti')}}</h1> --}}

        
    
        <div class="container-md lavoraConNoi-section-Utenti d-flex flex-column justify-content-center mt-5 pt-4 pb-5">

        

            <div class="container d-flex justify-content-center posizione-LavoraConNoi-Utenti pt-5 mt-3 ">

                <div class="lavoraConNoi-one-Utenti lavoraConNoi-cetratura-Utenti mx-auto w-100">

                    <div class="lavoraConNoi-oneT-Utenti d-flex">

                        

                        <div class="col-9 bg-cerca-utente container-elenco-utente ombra">
                            <div class="container p-2 bg-elenco-utente">
                                
                                
                                <livewire:search-users />
            
                                <livewire:users-list />
                            </div>
            
                            
                        </div>

                        <div class="col-3 contenitore-crea-utente">

                            <div class="d-flex justify-content-end col-12 box-crea-utente">
                                
                                
                                <div class="col-12 container-crea-utente bg-img-lavoraConNoi-Utenti Crea-Utente-Desk">
                                    <livewire:user-form />
                                </div>
                                <div class="col-md-7 box-crea-utente Crea-Utente-Mobile">
                                    
                                    <div class="accordion accordion-flush container-crea-utente bg-img-lavoraConNoi-Utenti " id="accordionFlushExample">
                                        
                                        <div class="accordion-item bg-accordion-mobile">
                                            <h2 class="accordion-header bg-accordion-mobile" id="flush-headingOne">
                                              <button class="accordion-button collapsed bg-accordion-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Crea o modifica utente
                                              </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                              <div class="accordion-body">
                                                <livewire:user-form />
                                              </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

    

        </div>


    </div>

</x-layout-main>