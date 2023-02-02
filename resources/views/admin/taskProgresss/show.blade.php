@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.taskProgress.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.task-progresss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.taskProgress.fields.id') }}
                        </th>
                        <td>
                            {{ $taskProgress->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.taskProgress.fields.description') }}
                        </th>
                        <td>
                            {{ $taskProgress->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.taskProgress.fields.task') }}
                        </th>
                        <td>
                            {{ $taskProgress->task->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.taskProgress.fields.created_at') }}
                        </th>
                        <td>
                            {{ $taskProgress->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.task-progresss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection