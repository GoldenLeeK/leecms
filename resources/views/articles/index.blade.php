@extends('layouts.app')

@section('title','文章列表')

@section('content')
    <div class="lyear-wrapper">
        <section class="mt-5 pb-5">
            <div class="container">
                <div class="row">
                    <!-- 文章列表 -->
                    <div class="col-xl-8">
                    @include('articles._articles_list',['articles'=>$articles])
                    <!-- 分页 -->
                        <div class="row">
                            <div class="col-lg-12">
                                {!! $articles->appends(Request::except('page'))->render() !!}
                            </div>
                        </div>
                        <!-- 分页 end -->

                    </div>
                    <!-- 文章列表 end -->

                    <!-- 右侧侧边栏 -->
                    <div class="col-xl-4">
                        @include('common._right_sidebar',['categories'=>$categories])
                    </div>
                    <!-- 右侧侧边栏End -->
                </div>
            </div>
        </section>
    </div>
@endsection
