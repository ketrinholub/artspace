<style>
    h3 {
        font-size: 14px !important;
        line-height: 17px !important;
    }
</style>
<section id="inspiration" class="inspiration">
    <div class="container">
        <div class="row">
            <div class="col-12 insptite">
                <h2>Вдохновение недели</h2>
            </div>

            @foreach ($inspirations as $inspiration)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/storage/{{ $inspiration->image }}" alt="" class="photo">
                        <div class="description">
                            {{-- <a href="/profile/{{ $inspiration->user_id }}"> --}}
                                <div class="line1">
                                    <img src="/img/Ellipse 2.svg" alt="" class="pphoto">
                                    <h3 class="name">{{ $inspiration->user_name }}</h3>
                                </div>
                            {{-- </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>