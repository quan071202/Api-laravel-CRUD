<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct(){

    }
    //Hiển thị danh sách chuyên mục(GET)
    public function index(){
         return 'danh sách';
     }
    //Lấy ra 1 chuyên mục theo id(GET)
    public function getCategory($id){
        return 'Chi tiết chuyên mục: '.$id;
    }
    //Sửa 1 chuyên mục theo id(POST)
    public function updateCategory($id)
    {

    }
    //Show form addCategory(Get)
    public function addCategory(){

    }
    //Thêm dữ liệu vào chuyên mục (POST)  
    public function handleAddCategory(){

    }
    //Xóa dữ liệu(DELETE)
    public function deleteCategory($id){

    }
}
