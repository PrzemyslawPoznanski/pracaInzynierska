<?php

namespace App\Http\Requests;

use App\Models\TaskProgress;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTaskProgressRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('task_progress_edit');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
            'task_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
