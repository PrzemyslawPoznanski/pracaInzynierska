<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTaskProgressRequest;
use App\Http\Requests\StoreTaskProgressRequest;
use App\Http\Requests\UpdateTaskProgressRequest;
use App\Models\Task;
use App\Models\TaskProgress;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskProgressController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_progress_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskProgresss = TaskProgress::with(['task', 'created_by'])->get();

        return view('admin.taskProgresss.index', compact('taskProgresss'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_progress_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tasks = Task::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $created_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.taskProgresss.create', compact('created_bies', 'tasks'));
    }

    public function store(StoreTaskProgressRequest $request)
    {
        $taskProgress = TaskProgress::create($request->all());

        return redirect()->route('admin.task-progresss.index');
    }

    public function edit(TaskProgress $taskProgress)
    {
        abort_if(Gate::denies('task_progress_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tasks = Task::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $taskProgress->load('task', 'created_by');

        return view('admin.taskProgresss.edit', compact('taskProgress', 'tasks'));
    }

    public function update(UpdateTaskProgressRequest $request, TaskProgress $taskProgress)
    {
        $taskProgress->update($request->all());

        return redirect()->route('admin.task-progresss.index');
    }

    public function show(TaskProgress $taskProgress)
    {
        abort_if(Gate::denies('task_progress_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskProgress->load('task', 'created_by');

        return view('admin.taskProgresss.show', compact('taskProgress'));
    }

    public function destroy(TaskProgress $taskProgress)
    {
        abort_if(Gate::denies('task_progress_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taskProgress->delete();

        return back();
    }

    public function massDestroy(MassDestroyTaskProgressRequest $request)
    {
        TaskProgress::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
