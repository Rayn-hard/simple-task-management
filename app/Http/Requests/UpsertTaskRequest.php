<?php

namespace App\Http\Requests;

use App\Enums\TaskStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'         =>  'nullable|string|max:255',
            'description'   =>  'nullable|string|max:255',
            'due_date'      =>  'required|date',
            'status'        =>  ['required', Rule::in(TaskStatusEnum::list())],
        ];
    }
}
