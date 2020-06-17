@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-body">
      @include('common.errors')

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

        {{ csrf_field() }}
      </form>
    </div>
  </div>


    @if (count($tasks) > 0)
    
      <div class="panel panel-default">
        <div class="panel-heading">
          Current Tasks
        </div>

        <div class="panel-body">
          <table class="table table-striped task-table">
            <thead>
              <th>Task</th>
              <th>&nbsp;</th>
            </thead>

            <tbody>
              @foreach ($tasks as $task)
                <tr>
                  <td>
                    <!-- using a property to access name bc we're working with task model -->
                    {{  $task->name  }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    @endif

@endsection
