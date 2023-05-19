
<x-main>
    @foreach ( $gym as $corso)
    <div class="portfolio-item">
       
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="" alt="..." />
        </a>
        <div class="portfolio-caption">
            <div class="portfolio-caption-heading">{{$corso['name']}}</div>
        </div>
    </div>
</div>
@endforeach
</x-main>