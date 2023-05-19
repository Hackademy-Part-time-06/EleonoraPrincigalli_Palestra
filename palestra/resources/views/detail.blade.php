<x-main>


    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">I nostri corsi</h2>
                <h3 class="section-subheading text-muted">Prenota subito quello più adatto a te</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- corsi-->
                    
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $corso['image'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $corso['name'] }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">La lezione si terrà nell'aula: {{ $corso['room'] }}</li>
                                <li class="list-group-item">Alle ore: {{ $corso['time'] }}</li>
                                <li class="list-group-item">Strumenti: {{ $corso['tools'] }}</li>

                            </ul>

                        </div>
                  
                </div>
              
       
    </section>

</x-main>
