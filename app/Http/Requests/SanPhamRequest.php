<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
        return [
            'gia' => 'required|numeric',
            'soluong' => 'required|numeric',
            'name' => 'required|min:4',
            'kieudang' => 'required',
            'vo' => 'required',
            'day' => 'required',
            'matkinh' => 'required',
            'duongkinh' => 'required',
            'dochiunuoc' => 'required',
            'mota' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'Vui lòng nhập tên sản phảm',
        'name.min' => 'Tên sản phảm tối thiểu 4 kí tự ',
        ////////////////////////////////////////////////
        'gia.required' => 'Vui lòng nhập giá ',
        'gia.numeric' => 'Vui lòng nhập số',

        'soluong.required' => 'Vui lòng nhập số lượng ',
        'soluong.numeric' => 'Vui lòng nhập số ',

        'kieudang.required' => 'Không được để trống ô này ',

        'vo.required' => 'Không được để trống ô này ',

        'day.required' => 'Không được để trống ô này ',

        'matkinh.required' => 'Không được để trống ô này ',

        'duongkinh.required' => 'Không được để trống ô này ',

        'dochiunuoc.required' => 'Không được để trống ô này ',

        'mota.required' => 'Không được để trống ô này ',


        
        ];
    }
}
