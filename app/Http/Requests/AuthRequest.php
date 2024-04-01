<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        switch (strtolower($this->route()->getActionMethod())):
            case 'login':
                return [
                    'email' => 'required|email',
                    'password' => 'required|min:6|max:50',
                ];
                break;

            case 'register':
                return [
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'password' => 'required|string|min:6|max:50',
                ];
                break;

            default:
                return [];
                break;
        endswitch;
    }
}
