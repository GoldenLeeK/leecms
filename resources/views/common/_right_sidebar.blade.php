<div class="lyear-sidebar">
    <!-- 分类 -->
    <aside class="widget widget-tag-cloud">
        <div class="widget-title">分类</div>
        <div class="tag-cloud">
            @foreach($categories  as $category)
                <a href="#" class="badge badge-light active">{{ $category->name }}</a>
            @endforeach
        </div>
    </aside>

    <!-- 归档 -->
    <aside class="widget">
        <div class="widget-title">归档</div>
        <ul>
            <li><a href="#">2019 三月</a> (40)</li>
            <li><a href="#">2019 四月</a> (08)</li>
            <li><a href="#">2019 五月</a> (11)</li>
            <li><a href="#">2019 六月</a> (21)</li>
        </ul>
    </aside>

    <!-- 标签 -->
    <aside class="widget widget-tag-cloud">
        <div class="widget-title">标签</div>
        <div class="tag-cloud">
            <a href="#" class="badge badge-light">php</a>
            <a href="#" class="badge badge-primary">苹果</a>
            <a href="#" class="badge badge-danger">比特币</a>
            <a href="#" class="badge badge-light">linux</a>
            <a href="#" class="badge badge-light">前端</a>
            <a href="#" class="badge badge-light">vue</a>
        </div>
    </aside>

    <!-- 热门文章 -->
    <aside class="widget widget-hot-posts">
        <div class="widget-title">热门文章</div>
        <ul>
            <li>
                <a href="#">三星将为 Galaxy Fold 用户提供 149 美元更换屏幕服务</a> <span>2019-09-25 10:05</span>
            </li>
            <li>
                <a href="#">专家：10年后6G将问世 数据传输速率有望比5G快100倍</a> <span>2019-09-25 08:06</span>
            </li>
            <li>
                <a href="#">苹果正式发布 iPadOS 13.1 系统，加入多项强大新功能</a> <span>2019-09-25 09:35</span>
            </li>
        </ul>
    </aside>
</div>


