@if(empty($comments))
    <p class="text-center">نظری موجود نیست...</p>
@else
    @foreach($comments as $comment)
        @php($profileImage=\App\Models\User::find($comment['user']['id'])->profileImage)
        <div class="comment margin-top-2x">
            <div class="comment-author-ava"><img src="{{$profileImage}}" alt="{{$comment['user']['name']}}"></div>
            <div class="comment-body">
                <div class="comment-header d-flex flex-wrap justify-content-between">
                    <h4 class="comment-title">{{$comment['title']}}</h4>
                    <div class="mb-2">
                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                class="icon-star"></i><i class="icon-star"></i>
                        </div>
                    </div>
                </div>
                <p class="comment-text text-right">{{$comment['description']}}</p>
                <div class="comment-footer"><span class="comment-meta">{{$comment['user']['name']}}</span> | <span
                        class="comment-meta">{{$comment['created_at']}}</span></div>
                @if(!empty($comment['items']))
                    {!! \App\View\Components\Comments::buildCommentItems($comment['items']) !!}
                @endif
            </div>
        </div>
    @endforeach

@endif

