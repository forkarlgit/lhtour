@extends('layout')

@section('content')

<!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix notopmargin">

                <div class="widget clearfix hidden">
                    @component_advertisement('sidebar')
                </div>

                <h2 class="box-title">New Exclusive High Definition Videos
                    <a class="btn primary pull-right" href="{{ url('videos') }}">View All<i class="icon-arrow-circle-right"></i></a>
                </h2>

                <div class="row">
                    @foreach($contents as $key => $content)
                    @include('includes.content_thumb')
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-break ">
                            <div class="col-md-7">
                                <h1 class="content-break-header">WHat members to expect inside!</h1>
                                <div class="col-md-6">
                                    <ul class="content-breal-list">
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="content-breal-list">
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <a href="/join">
                                    <img src="{{ asset('img/content-break-btn.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="box-title">Newest DVDs <a href="#" class="btn primary pull-right">VIEW ALL</a></h2>

                <div class="row">
                    @foreach($dvds as $key => $dvd)
                    @include('includes.dvd_thumb')
                    @endforeach
                </div>

                <div class="widget clearfix hidden">
                    @component_advertisement('sidebar')
                </div>

            </div>
        </div>
    </section>
    @stop
