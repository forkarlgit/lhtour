@extends('layout')

@section('content')

<!-- Content  ============================================= -->
<section id="content" class="view-page">

    <div class="content-wrap">
        <div class="container clearfix">
           <div class="col-md-9">
            @if(Request::has('type'))
            <ul class="video-top">
                <li class="pull-left"><strong>Photos</strong></li>
                <li class="pull-right"><a href="{{ $content->link }}">Full Video</a></li>
            </ul>
            @if(count($photos) > 0)

            <div class="portfolio-container">

                <div id="portfolio" class="portfolio-masonry clearfix" data-lightbox="gallery">
                    @foreach($photos as $photo)
                    @foreach($photo->full_photos as $key => $item)
                    <article class="portfolio-item pf-media pf-icons">
                        <div class="portfolio-image">
                            <a href="{{ config('yppcontent.photos_url') }}/{{ $photo->location }}/full/{{ $item }}" data-lightbox="gallery-item">
                                <img src="{{ config('yppcontent.thumb_url') }}/{{ $photo->thumb_location }}/{{ $item }}">
                            </a>
                            <a href="{{ config('yppcontent.photos_url') }}/{{ $photo->location }}/{{ $item }}" target="_blank" class="text-center">
                                View Hi-Res Photo
                            </a>
                        </div>
                    </article>
                    @endforeach
                    @endforeach

                </div><!-- #portfolio end -->

                <div class="pagination-container topmargin nobottommargin">

                    <ul class="pagination nomargin"></ul>

                </div>
            </div>
            @endif
            @else
            @foreach($videos as $video)

            <div class="player-container">
                @include('content.videoplayer')
            </div>
            @endforeach
            @endif
        </div>
        <div class="col-md-3">
            <div class="form-cont">
            @include('includes.video_form')
            </div>
            <div class="related-cont">
                <h4>Related Videos</h4>
                @foreach($contents as $key => $content)
                <div class='col-md-6 col-sm-12 col-xs-12 related-thumbs'>
                    <a href="{{ $content->link }}">
                        <img src="{{ $content->thumb }}" class="img-responsive center-block">
                    </a>
                    <h3><a href="{{ $content->link }}">{{ $content->title }}</a></h3>
                </div>
                @endforeach
                <a class="btn primary related-btn" href="{{ url('join') }}">GET YOUR ACCESS NOW</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="entry-title">
                <div class="row">
                    <div class="col-md-1">
                        <a href="/dvds/{{ $content_dvds->first()->id }}" class="sitelogo dvd-cover">
                            <img src="{{ $content_dvds->first()->front_cover }}" alt="{{ $content_dvds->first()->title }}">
                        </a>
                    </div>
                    <div class="col-md-11 nopaddingleft">
                        <h2>{{ $content->title }}</h2>
                        <div class="col-md-3 nopaddingleft"> From DVD <a href="/dvds/{{ $content_dvds->first()->id }}" class="green">{{ $content_dvds->first()->title }}</a> </div>
                        <div class="col-md-3"> Added: <span class="green">December 18, 2015</span> </div>
                        <p>{!! $content->description !!}</p>
                    </div>
                </div>
            </div><!-- .entry-title end -->
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12">
            <div class="user-actions">
                <div class="pull-left">
                    <a href="{{ url('join') }}" class="btn primary like-btn"><i class="fa fa-thumbs-up"></i> Like</a>
                    <a href="{{ url('join') }}" class="btn primary dislike-btn"><i class="fa fa-thumbs-down"></i> Dislike</a>
                </div>
                <div class="pull-right">
                    <a href="{{ url('join') }}" class="btn primary playlist-btn"> Playlist</a>
                    <a href="{{ url('join') }}" class="btn primary download-btn"><i class="fa fa-chevron-down"></i> Download</a>
                    <a href="{{ url('join') }}" class="btn primary"> Join Now</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <h2 class="box-title">Newest Videos
                <a class="btn primary pull-right" href="{{ url('videos') }}">View All</a>
            </h2>

            <div class="row">
                @foreach($contents as $key => $content)
                @include('includes.content_thumb')
                @endforeach
            </div>
        </div>
    </div>
</section><!-- #content end -->


<script type="text/javascript">

jQuery(document).ready(function($) {
    $(".radio-cont").each(function(){
        $(this).click(function(){
            $(".radio-cont.active").removeClass('active');
            $(this).addClass('active');
        });
    });
    $("div.radio").each(function(){
        $(this).click(function(){
            $("div.radio.active").removeClass('active');
            $(this).addClass('active');
        });
    });
    $("#rating").rating({
        glyphicon: false,
        ratingClass: "rating-fa",
        showClear: false,
        showCaption: false,
        size: "xs",
        @if($has_rated)
        readonly: true,
        @endif
    });

    $('#rating').on('rating.change', function(event, value, caption) {
        $.post("{{ url('rate') }}", { id: {{ $content->id }}, rating: value });
    });

    $('#submit-button').click(function(){
        $.post("{{ url('comment') }}", { id: {{ $content->id }}, username: $('#author').val(), message: $('#comment').val() }, function(data){
            $('#commentslist').html(data);
            $('#comment').val('');
        });
    });

    var doingAjax = false;

    $('.add-to-favorites').on('click', function(event) {
        event.preventDefault();

        if (doingAjax) {
            return;
        }

        var $this = $(this),
        isFavorite = $this.data('is-favorite');

        if (isFavorite) {
            return;
        }

        doingAjax = true;

        $.ajax({ method: 'POST', url: '{{ url('favorites') }}', data: { content_id: '{{ $content->id }}' } }).done(function(response) {
            if (response.success) {
                $this.text('Added to Favorites');
            }

            if (response.message) {
                window.alert(response.message);
            }
            doingAjax = false;
        });
    });

});

</script>
<script type="text/javascript">

jQuery(document).ready(function($){

    $('.portfolio-container').pajinate({
        items_per_page : 8,
        item_container_id : '#portfolio',
        nav_panel_id : '.pagination-container ul',
        show_first_last: false
    });

    $( '.pagination a' ).click(function() {
        var t=setTimeout(function(){ $( '.flexslider .slide' ).resize(); },1000);
    });

});

</script>
@stop
