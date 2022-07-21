<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:128',
            'description' => 'required|string|max:10000',
            'status' => 'required',
        ];
    }

  public function messages()
  {
      return [
          'name.required' => 'Task title must be entered',
          'name.min' => 'Title must be between 3 and 128 characters',
          'name.max' => 'Name must be between 3 and 128 characters',

          'description.required' => 'Task description must be entered',
          'description.max' => 'Task description must be bellow 10000 characters',

          'status.required' => 'Task statusmust be selected',
      ];
  }
}
