<section id="tags" class="tags ">
    <div class="container">
        <div class="row">
            <div style="text-align: center;" class="col-12">
                <h2>Выбери категорию по душе</h2>
            </div>

            <div class="col-lg-4 col-md-6  ml-auto but">
                <a href="{{ route('getVideos') }}">
                    <button class="buttons-main">Все уроки</button>
                </a>
            </div>
            @foreach ($videoCategories as $videoCategory)
                <div class="col-lg-4 col-md-6  ml-auto but">
                    <a href="{{ route('getVideos', ['category' => $videoCategory->id]) }}">
                        <button class="buttons-main">{{ $videoCategory->name }}</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>