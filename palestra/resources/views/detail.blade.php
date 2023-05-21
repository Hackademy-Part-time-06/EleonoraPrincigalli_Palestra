<x-main>

    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Dettagli sul corso</h2>
                <h3 class="section-subheading text-muted">Enjoy</h3>
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
                <div class="col-lg-6 col-sm-6 mb-4">
                    <div> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro fugiat quisquam in vel
                        adipisci praesentium repellat perferendis eum magni nesciunt, eligendi ullam, numquam ipsa saepe
                        deleniti! Repudiandae eum labore quam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem maxime nam ratione pariatur
                        sapiente dignissimos debitis sunt illo voluptate libero, quae nemo dolorem minus explicabo
                        aspernatur cumque. Cupiditate, omnis maiores. Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Perspiciatis reiciendis eos beatae doloribus id possimus vel facere aspernatur
                        et repudiandae blanditiis neque esse, adipisci dolores. Incidunt, accusamus? Nulla,
                        necessitatibus eum? </div>
                </div>
            </div>
        </div>


    </section>

</x-main>
