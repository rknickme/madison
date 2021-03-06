<?php

namespace App\Http\Requests\SponsorMember;

use App\Models\Sponsor;
use App\Models\SponsorMember;
use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $currentUser = $this->user();

        return $currentUser && (
            $currentUser->isAdmin() || $this->sponsor->isSponsorOwner($currentUser->id)
        );
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
