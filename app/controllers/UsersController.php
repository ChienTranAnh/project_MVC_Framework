<?php


namespace app\controllers;


class UsersController
{
   public function index()
   {
      echo 'Đây là danh sách người dùng trong hàm Index';
   }

   public function danhSach()
   {
      echo "Danh sách user từ admin";
   }

   public function detail($id)
   {
      echo 'Đây là hàm detail trong UserController có id = ' . $id;
   }

   public function edit($id)
   {
      echo "Check thử cái chơi $id";
   }

   public function news($category, $idCate)
   {
      echo "Tin tức có danh mục $category mang id = $idCate";
   }
}