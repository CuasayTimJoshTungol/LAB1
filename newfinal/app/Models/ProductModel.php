<?php


namespace App\Models;
use CodeIgniter\Model;






class ProductModel extends Model    
{
    protected $table = 'finaltim';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_name',
        'product_description',
        'product_category',
        'product_quantity',
        'product_price'
    ];
}