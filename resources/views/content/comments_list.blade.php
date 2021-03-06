@foreach($content->comments as $key => $comment)
<li class="comment even thread-even depth-1" id="li-comment-{{ $key }}">

    <div id="comment-{{ $key }}" class="comment-wrap clearfix">

        <div class="comment-meta">

            <div class="comment-author vcard">

                <span class="comment-avatar clearfix">
                <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

            </div>

        </div>

        <div class="comment-content clearfix">

            <div class="comment-author">{{ $comment->username }}<span><a href="#" title="Permalink to this comment">{{ $comment->formatted_date }}</a></span></div>

            <p>{!! $comment->message !!}</p>

            <a class='comment-reply-link' href='#respond'><i class="icon-reply"></i></a>

        </div>

        <div class="clear"></div>

    </div>


</li>
@endforeach

