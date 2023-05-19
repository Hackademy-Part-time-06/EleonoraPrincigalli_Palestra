  <!-- Portfolio Grid-->
  <x-main>
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">I nostri corsi</h2>
            <h3 class="section-subheading text-muted">Prenota subito quello più adatto a te</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- corsi-->
                @foreach ($gym as $corso)
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{$corso['image']}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $corso['name'] }}</div>
                            <a href="{{route('detail',['ref'=>$corso['name']])}}" class="btn btn-primary text-uppercase">Dettagli</a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                @endforeach
            </div>
        </div>
</section>
  </x-main>