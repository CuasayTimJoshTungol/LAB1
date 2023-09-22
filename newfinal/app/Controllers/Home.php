<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function homepage(){
        return view("hello");
    }
    public function hm($id =null){
        $data['id'] =$id;
        return view("hello", $data);
    }
    public function finaltim(){ //FOR PRODUCTS CONNECTION
        $f = new ProductModel();
        $data['pr'] = $f->findAll();
        return view('products', $data);
    }
    public function edit($id =null){
        $p = new ProductModel();
        $data ['p'] = $p->where('id', $id)->first();
        return view ('pedit', $data); 
    }
    public function update(){
        $productname = $this->request->getVar('product_name');
        $productdescription = $this->request->getVar('product_description');
        $productcategory = $this->request->getVar('product_category');
        $productquantity = $this->request->getVar('product_quantity');
        $productprice = $this->request->getVar('product_price');
        $id = $this->request->getVar('id');
        $p = new ProductModel();
        $data =[
            'product_name' => $productname,
            'product_description' =>  $productdescription,
            'product_category' => $productcategory,
            'product_quantity' => $productquantity,
            'product_price' => $productprice     
        ];
        $p->set($data)->where('id', $id)->update();
        $session = session();
        $session->setFlashdata('msg', 'Product updated successfully');
        return redirect()->to('/finaltim');
    }   
    public function delete($id = null)
{
    if ($id === null) {
      
        return redirect()->to('/finaltim');  
    }

    $p = new ProductModel();

    $product = $p->where('id', $id)->first();
    if ($product) {
       
        $p->where('id', $id)->delete();

        $session = session();
        $session->setFlashdata('msg', 'Product Deleted');
    } else {
        $session = session();
        $session->setFlashdata('msg', 'Product not found for deletion');
    }

    return redirect()->to('/finaltim');  
}   
public function showInsertForm()
{
    return view('insert');
}


public function insertProduct() 
{
    return redirect()->to('/finaltim');
}
public function insert()
{
    if ($this->request->getMethod() === 'post') {
        $name = $this->request->getPost('product_name');
        $description = $this->request->getPost('product_description');
        $category = $this->request->getPost('product_category');
        $price = $this->request->getPost('product_quantity');
        $quantity = $this->request->getPost('product_price');

        if (empty($name) || empty($description) || empty($category) || empty($price) || empty($quantity)) {
            session()->setFlashdata('error', 'All fields are required.');

            return redirect()->to('/insert'); 
        }

        $data = [
            'product_name' => $name,
            'product_description' => $description,
            'product_category' => $category,
            'product_quantity' => $price,
            'product_price' => $quantity
        ];

        $model = new ProductModel();
        $model->insert($data);

        session()->setFlashdata('msg', 'Product added successfully.');

        return redirect()->to('/finaltim');
    }
}
}

