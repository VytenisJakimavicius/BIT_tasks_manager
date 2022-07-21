<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStatusRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:16',
        ];
    }

  public function messages()
  {
      return [
          'name.required' => 'Task title must be entered',
          'name.min' => 'Title must be between 3 and 16 characters',
          'name.max' => 'Name must be between 3 and 16 characters',
      ];
  }
}
