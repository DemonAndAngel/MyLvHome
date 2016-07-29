@extends('layouts.app')
@section('content')
<div class="container">
    <div class="form-group">
    <label for="test-content" class="col-sm-3 control-label">Test</label>

    <div class="col-sm-6">
        <input type="text" name="content" id="test-content" value="" class="form-control">
    </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" id="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i>submit
            </button>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
$(function () {
    $('#submit').click(function (){
        if($('#test-content').val() != '')
        {
            $.ajax({
                url: '{{ url('test/savetest') }}',
                data: {content: $('#test-content').val()},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type: 'post',
                success: function (data) {
                    if(data='1')
                        alert('添加成功！');
                    else
                        alert('添加失败！');
                }
            });
        }
    });
});
</script>
@endsection