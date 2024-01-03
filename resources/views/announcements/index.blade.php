<x-layout-articles>

    <div class="container box-title p-3">
        <h1 class="fw-bold text-center display-4 box-title-page-mobile">{{__('ui.esploraArrivi')}}</h1>
        <h2 class="text-center lead">{{__('ui.textEsploraArrivi')}}</h2>
    </div>

    <div class="container-articles w-100 px-3 pb-3">
        <div class="box-articles">
            {{-- menù linea gialla --}}
            <div class="box-filter container d-flex justify-content-between align-items-center px-5">

                <div class="text-filter">
                    @auth
                    <a class="link-light link-underline link-underline-opacity-0" href="{{ route('announcements.create') }}">
                        <h6 class="m-0"><i class="fas fa-plus pe-2"></i>{{__('ui.newArticle')}}</h6>
                    </a>
                    @else
                        <a class="link-light link-underline link-underline-opacity-0" href="{{ route('login') }}">
                            <h6 class="m-0">{{__('ui.newArticle')}}</h6>
                        </a>
                    @endauth
                </div>

                {{-- ordinamento --}}
                <div class="d-flex ">
                    <div class="form-row">
                        <select id="order" class="form-select" onchange="sortList()">
                            <option value="">{{__('ui.ordinaPer')}}</option>
                            <option value="recenti">{{__('ui.recenti')}}</option>
                            <option value="vecchi">{{__('ui.vecchi')}}</option>
                        </select>
                    </div>

                    <form action="{{ route('announcements.index') }}" method="GET"
                        class="d-flex align-items-baseline">
                        <div class="form-row ms-2">
                            <div class="value">
                                <select class="form-select" name="category" id="category_id">
                                    <option value="">{{__('ui.category')}}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-row ms-2">
                            <button type="submit" class="btn btn-secondary">{{__('ui.filtra')}}</button>
                        </div>
                    </form>

                </div>

            </div>

            {{-- card annuncio --}}
            <div class="d-flex row justify-content-center align-items-center mx-0 mt-5">

                @forelse ($announcements as $announcement)
                    <x-card 
                    :routeCategory="route('showCategory', ['category' => $announcement->category])" 
                    :nameCategory="$announcement->category->name" 
                    :title="$announcement->title" 
                    :description="$announcement->description" 
                    :price="$announcement->price"
                    :routeAnnouncement="route('announcements.show', compact('announcement'))" 
                    :createdAt="$announcement->created_at->format('d/m/Y')"
                    :authorName="$announcement->user->name"
                    :user="$announcement->user"
                    :images="$announcement->images"
                    />  
                    @empty
                @endforelse

                
                @if ($announcements->links()->paginator->hasPages())
                    <div class="mt-4 p-4 box has-text-centered">
                        {{ $announcements->links() }}
                    </div>
                @endif

            </div>

        </div>

    </div>

</x-layout-articles>
