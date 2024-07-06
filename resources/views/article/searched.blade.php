<x-layout>
    <x-header2
    title="Risultati della ricerca '{{ $query }}' " 
    
    />
    <div class="container-fluid ">
       
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-8 ">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h1 class="text-center fst-italic display-5 mt-5 ">
                        Nessun articolo corrisponde alla tua ricerca
                    </h1>
                    <a href="{{ route('home') }}" class="mt-5 btn btnSubmit"> Torna all'homepage</a>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
