<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Post_documentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
            return true;
      
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post=$this->route()->parameter('post');
        
       $rules=[
        'title'=>'required',
       
        'extract'=>'required',
        'category_id'=>'required',
        'url'=>'required|mimes:pdf|file|max:60000',
       ];

       if ($post) {
           $rules['url']='mimes:pdf|file|max:60000';
       }
       return $rules;
    }
}
