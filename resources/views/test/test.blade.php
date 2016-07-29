@extends("layouts.app")
@section("content")
    <form action="{{ url('test') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

                <!-- Task Name -->
        <div class="form-group">
            <label for="test-name" class="col-sm-3 control-label">Test</label>

            <div class="col-sm-6">
                <input type="text" name="age" id="test-name" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-btn fa-plus"></i>Go To Test
                </button>
            </div>
        </div>
    </form>
@endsection