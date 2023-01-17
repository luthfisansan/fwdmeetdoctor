<?php

namespace App\Http\Requests\Role;

use App\Models\ManagementAccess\Role;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // add validation for role this here
            'title' => [
                'required', 'string', 'max:255', Rule::unique('role')->ignore($this->role),
                // Rule unique only works for other record id
            ],
        ];
    }
}
