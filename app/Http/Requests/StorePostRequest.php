<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    

    public function store(StorePostRequest $request): RedirectResponse
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validatedData = $request->validated();

        // Retrive a portion of the validated input data...
        $validatedData = $request->safe(['kategori_kode', 'kategori_nama']);
        $validatedData = $request->except(['kategori_kode', 'kategori_nama']);

        // the post is valid
        return redirect('/kategori');
    }


}
