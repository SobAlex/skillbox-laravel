<aside class="col-md-4 blog-sidebar">

    <div class="p-3 mb-3 bg-light rounded">

        <h4 class="font-italic">Теги</h4>

        <div class="row">

            <div class="col-md-6">

                <h6 class="font-italic">Статьи</h6>

                @include('posts.tags', ['tags' => $tagsPostsCloud])

            </div>

            <div class="col-md-6">

                <h6 class="font-italic">Новости</h6>

                @include('news.tags', ['tags' => $tagsNewsCloud])

            </div>

        </div>

    </div>

</aside>
