@extends('layouts.app')

@section('content')
    <div class="lyear-wrapper">
        <section class="mt-5 pb-5">
            <div class="container">

                <div class="row">
                    <!-- 文章列表 -->
                    <div class="col-xl-8">

                        <article class="lyear-arc">
                            <div class="arc-header">
                                <h2 class="arc-title"><a href="post.html">蔚来汽车宣布将在今日20点召开第二季度财报业绩电话会</a></h2>
                                <ul class="arc-meta">
                                    <li><i class="mdi mdi-calendar"></i> 2019-09-25 09:21</li>
                                    <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">蔚来汽车</a>, <a
                                            href="#">财报</a></li>
                                    <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">3 评论</a></li>
                                </ul>
                            </div>

                            <div class="arc-synopsis">
                                <p>今日，蔚来宣布将在北京时间周三20: 00召开第二季度财报业绩电话会议。昨日，蔚来汽车公布了截至 2019 年 6 月 30 日未经审计的第二季度财报。财报财报显示，蔚来
                                    2019 第二季度获得总营收15. 086 亿元，环比下降7.5%同比增长3180.1%;净亏损32. 858 亿元，环比增长25.2%，同比增长83.1%。</p>
                            </div>
                        </article>

                        <article class="lyear-arc">
                            <div class="arc-header">
                                <h2 class="arc-title"><a href="post.html">苹果 CEO 库克：Apple 已完全使用可再生能源供电</a></h2>
                                <ul class="arc-meta">
                                    <li><i class="mdi mdi-calendar"></i> 2019-09-25 09:20</li>
                                    <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">苹果</a>, <a
                                            href="#">Apple</a></li>
                                    <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">37 评论</a></li>
                                </ul>
                            </div>

                            <div class="arc-preview">
                                <a href="#"><img src="images/blog/post-1.png" alt="" class="img-fluid rounded"></a>
                            </div>

                            <div class="arc-synopsis">
                                <p>苹果 CEO 库克在微博上表示，「我们很自豪 Apple 已完全使用可再生能源供电，并携手我们的供应商共同朝这个方向努力。明年我们将有超过 6000
                                    兆瓦的新可再生能源并网，包括位于湖南和湖北的三座新风电场。」</p>
                            </div>
                        </article>

                        <article class="lyear-arc">
                            <div class="arc-header">
                                <h2 class="arc-title"><a href="post.html">韭菜扎心！比特币一度跌破8000美元 24小时跌幅10.6%</a></h2>
                                <ul class="arc-meta">
                                    <li><i class="mdi mdi-calendar"></i> 2019-09-25 09:19</li>
                                    <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">比特币</a>, <a href="#">韭菜</a>
                                    </li>
                                    <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">90 评论</a></li>
                                </ul>
                            </div>

                            <div class="arc-synopsis">
                                <p>本周二，比特币迎来了一轮暴跌，根据行情显示，比特币今日凌晨曾一度跌破 8000 美元，现报约8723美元，恐怕这让一大波韭菜们相当扎心。 </p>
                            </div>
                        </article>

                        <article class="lyear-arc">
                            <div class="arc-header">
                                <h2 class="arc-title"><a href="post.html">数十万 PhpStudy 用户被植入后门，快来检测你是否已沦为“肉鸡”！</a></h2>
                                <ul class="arc-meta">
                                    <li><i class="mdi mdi-calendar"></i> 2019-09-24 09:57</li>
                                    <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">PhpStudy</a></li>
                                    <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">115 评论</a></li>
                                </ul>
                            </div>

                            <div class="arc-preview">
                                <a href="#"><img src="images/blog/post-2.jpg" alt="" class="img-fluid rounded"></a>
                            </div>

                            <div class="arc-synopsis">
                                <p>
                                    北京时间9月20日，杭州公安发布《杭州警方通报打击涉网违法犯罪暨‘净网2019’专项行动战果》一文，文章曝光了国内知名PHP调试环境程序集成包“PhpStudy软件”遭到黑客篡改并植入“后门”。截...</p>
                            </div>
                        </article>

                        <article class="lyear-arc">
                            <div class="arc-header">
                                <h2 class="arc-title"><a href="post.html">效力微软 15 年的前员工解释 Windows 10 为什么问题如此多</a></h2>
                                <ul class="arc-meta">
                                    <li><i class="mdi mdi-calendar"></i> 2019-09-24 07:52</li>
                                    <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">windows</a>, <a href="#">win10</a>
                                    </li>
                                    <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">26 评论</a></li>
                                </ul>
                            </div>

                            <div class="arc-synopsis">
                                <p>众所周知 Windows 10 系统问题频发，整体来说稳定性比较差，然而在此之前的版本其实相对来说稳定性还挺好的。自从 Windows 10
                                    正式版推出之时，该系统就开始频繁出现问题，乃至现在每个月安全...</p>
                            </div>
                        </article>

                        <!-- 分页 -->
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="mdi mdi-chevron-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="mdi mdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- 分页 end -->
                    </div>
                    <!-- 内容 end -->

                    <!-- 右侧侧边栏 -->
                    @include('common._right_sidebar')
                    <!-- 侧边栏End -->
                </div>

            </div>
            <!-- end container -->
        </section>
    </div>
@stop
