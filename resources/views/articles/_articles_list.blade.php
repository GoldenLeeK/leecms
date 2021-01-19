@if(count($articles))
    @foreach($articles  as $article)
        <article class="lyear-arc">
            <div class="arc-header">
                <h2 class="arc-title"><a href="{{ route('articles.show',[$article->id]) }}">{{ $article->title }}</a>
                </h2>
                <ul class="arc-meta">
                    <li><i class="fa fa-calendar"></i> {{ $article->updated_at->diffForHumans()  }}</li>
                    <li><i class="fa fa-folder-open"></i> {{ $article->category->name }}</li>
                    <li><i class="fa fa-tags"></i> <a href="#">PhpStudy</a></li>
                    <li><i class="fa fa-comments"></i> {{$article->reply_count}} 评论
                    </li>
                </ul>
            </div>
            @if($article->cover)
                <div class="arc-preview">
                    <a href="#"><img src="{{ $article->cover }}" alt="{{ $article->title }}" class="img-fluid rounded"></a>
                </div>
            @endif
            <div class="arc-synopsis">
                <p class="text-truncate">{{ $article->abstract }}</p>
            </div>
        </article>
        @if ( ! $loop->last)
            <hr>
        @endif
    @endforeach
@else
    <div class="empty-block">
        暂无数据
    </div>
@endif
