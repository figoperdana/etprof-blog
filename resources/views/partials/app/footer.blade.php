<footer class="footer">
    <div class="container">
        <div class="content">
            <div class="columns">
                <div class="column is-3">
                    <p class="title is-5">{{ __('app.footer.share') }}</p>
                    @foreach (['facebook', 'twitter'] as $social)
                        <p>
                            <a href="@yield($social)" rel="nofollow noopener" target="_blank">
                                <span class="icon">{!! icon($social) !!}</span>
                                <span class="text">{{ ucfirst($social) }}</span>
                            </a>
                        </p>
                    @endforeach
                </div>
                <div class="column is-3">
                    <p class="title is-5">{{ __('app.footer.latest') }}</p>
                    @foreach (getFooterArticles() as $article)
                        <p><a href="{{ $article->link }}">{{ $article->title }}</a></p>
                    @endforeach
                </div>
                <div class="column is-3">
                    <p class="title is-5">{{ __('app.footer.about') }}</p>
                    <p>{{ __('app.footer.text') }}</p>
                    <a href="{{ __('app.footer.url') }}">linkedin.com/in/figoperdana/</a>
                </div>
                <div class="column is-3">
                    <p class="title is-5">My University</p>
                    <a href="https://unej.ac.id/">
                    <img src="http://kemahasiswaan.unej.ac.id/wp-content/uploads/2020/07/cropped-Logo-Baku-UNEJ-2020-Square.png" alt="{{ config('settings.site_title') }}" width="100" 
                    height="100">
                    </a>
                    <p href="https://unej.ac.id/">Get to know more about my University. <a>The University of Jember<a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
