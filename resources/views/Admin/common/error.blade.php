@if (count($errors) > 0)
    @foreach($errors->all() as $error)
        @if($loop->first)
            <script>
                $(function () {
                    layui.use('layer', function () {
                        var layer = layui.layer;
                        layer.msg('{{ $error }}', {icon: 2});
                    });
                })
            </script>
        @endif
    @endforeach
@endif
