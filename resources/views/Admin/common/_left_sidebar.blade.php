<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            @foreach($permissions as $permission)
                @if(Auth::user()->can($permission->name) && $permission->is_hidden == 0)
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li"
                               lay-tips="{{$permission->title}}">{!! $permission->icon !!}</i>
                            <cite>{{$permission->title}}</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('统计页面','welcome1.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>统计页面</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('会员列表(静态表格)','member-list.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员列表(静态表格)</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('会员列表(动态表格)','member-list1.html',true)">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员列表(动态表格)</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('会员删除','member-del.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员删除</cite></a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="iconfont">&#xe70b;</i>
                                    <cite>会员管理</cite>
                                    <i class="iconfont nav_right">&#xe697;</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a onclick="xadmin.add_tab('会员删除','member-del.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>会员删除</cite></a>
                                    </li>
                                    <li>
                                        <a onclick="xadmin.add_tab('等级管理','member-list1.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>等级管理</cite></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
