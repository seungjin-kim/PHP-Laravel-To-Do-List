@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-body">
        <form action="/task" method="POST" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
              <input type="text" name="name" id="name" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-default">
                Add Task
              </button>  
            </div>
          </div>
        </form>
    </div>
  </div>

@endsection
