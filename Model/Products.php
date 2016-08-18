<?php // some code

class Products
{
     public $products = array();

     public function __construct(){
      // "0000001","F1000","Fudge"
       $labels = array('id','sku','title','description','price','special','link');
       $my_file = './Model/products.csv';
       $fh = fopen($my_file,'r');    //open file for "read"
       if($fh){
           while (!feof($fh)){
               $row = fgetcsv($fh);
               $tempRow = array();
               if ( isset($row) && is_array($row) && count($row)>0 ){
                  foreach($row as $key => $value){
                     $tempRow[ $labels[$key] ] = $value;
                  }                
                $this->products[] = $tempRow;
               }
           }
       }
     }
      public function getProducts(){
          return $this->products;
      }
      public function getTitles(){

        $titles = array();
        foreach($this->products as $row) {
            $titles[] = $row['title'];
        }
            return $titles;
      }
}
