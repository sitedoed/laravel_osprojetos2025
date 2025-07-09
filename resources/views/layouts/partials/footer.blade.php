<footer class="bg-dark text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>{{ config('app.name') }}</h5>
                <p class="text-muted">Soluções em desenvolvimento de software</p>
            </div>
            <div class="col-md-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-muted">Home</a></li>
                    <li><a href="{{ route('services') }}" class="text-muted">Serviços</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contato</h5>
                <ul class="list-unstyled text-muted">
                    <li>contato@empresa.com</li>
                    <li>(11) 9999-9999</li>
                </ul>
            </div>
        </div>
        <hr class="my-4 bg-light">
        <div class="text-center">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>
</footer>