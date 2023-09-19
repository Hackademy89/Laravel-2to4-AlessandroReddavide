<x-layout title="Homepage">
    <!-- Intestazione -->
    <header>
        <h1 class="animated-title">Benvenuti nella nostra Homepage</h1>
    </header>

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
        <!-- Carosello dei prodotti in saldo -->
        <div class="sale-products-carousel">
            {{-- Creazione card saldo --}}
            <div class="row">

                @foreach ($salesproducts as $salesproduct)
                    
                @endforeach
            </div>
        </div>
    </main>





</x-layout>
