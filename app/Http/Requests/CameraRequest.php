<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CameraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id = $this->camera ? ',' . $this->camera->id : '';
        return $rules = [
            'name' => 'required|string|max:255|unique:cameras,name' . $id,
        ];
    }
}
