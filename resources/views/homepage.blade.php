<x-layout title="Homepage">
    <!-- Contenuto principale -->
    <section class="content">
        <section class="section">
            <h2>Chi siamo</h2>
            <p>Siamo un team appassionato di informatica e tecnologia. Condividiamo la nostra passione attraverso
                servizi innovativi e soluzioni su misura.</p>
        </section>
        <section class="section">
            <h2>I nostri servizi</h2>
            <p>Offriamo una vasta gamma di servizi informatici, tra cui sviluppo di software, consulenza IT e supporto
                tecnico.</p>
        </section>
        <section class="section">
            <h2>Contattaci</h2>
            <p>Se avete domande o richieste, non esitate a contattarci. Siamo qui per aiutarvi.</p>
        </section>
    </section>

    <!-- Contenuto principale -->
    <main class="content">
            {{-- Creazione card saldo --}}
            <div class="row">

                @foreach ($salesproducts as $salesproduct)
                <x-card title="{{$salesproduct['title']}}" img="{{$salesproduct['img']}}" specific="{{$salesproduct['specific']}}"/> 

                @endforeach
            </div>
    </main>





</x-layout>
