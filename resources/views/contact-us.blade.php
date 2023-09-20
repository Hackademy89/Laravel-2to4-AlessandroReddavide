<x-layout title="smartphone">

    @if (session()->has('success'))
        {{-- effettua un check su message per verificare se esiste e quindi per generare il div --}}
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="alert alert-succes">
                    <h2>{{ session('success') }}</h2>
                </div>
            </div>
        </div>
    @endif


    <h2 class="neon-title my-5">Contattaci</h2>
    <div class="container mt-5 my-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title text-center my-3">Inviaci un Email</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('email') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control bg-dark text-white" id="email"
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label for="oggetto" class="form-label">Oggetto</label>
                                <input type="text" class="form-control bg-dark text-white" id="oggetto"
                                    name="subject">
                            </div>
                            <div class="mb-3">
                                <label for="messaggio" class="form-label">Messaggio</label>
                                <textarea class="form-control bg-dark text-white" id="messaggio" rows="4" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Invia Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
