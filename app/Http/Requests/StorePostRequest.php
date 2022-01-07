<?php

namespace App\Http\Requests;
use Auth;
use App\Models\Buku;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
        if(Auth::check() && Auth::user()->role == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }
      

        $datas = Buku::get();
        return view('buku.index', compact('datas'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul' => 'required|string|max:255',
            'isbn' => 'required|string' 
        ];
    }
}
