<?php
class Products
{
public $products = array();

// mysql connection params
public $user = 'sweetscomplete';
public $dbname = 'sweetscomplete';
public $pass = 'password';
public $host = 'localhost';
public $dsn = '';
public $pdo = '';
public $testMode = TRUE;

public function __construct()
{
$this->dsn = sprintf('mysql:dbname=%s;host=%s', $this->dbname, $this->host);
if ($this->testMode) {
$this->pdo = new PDO($this->dsn, $this->user, $this->pass,
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} else {
$this->pdo = new PDO($this->dsn, $this->user, $this->pass);
}
$sql = 'SELECT * FROM `products`';
$stmt = $this->pdo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
$this->products[] = $row;
}
}

public function getShoppingCart()
{

}
public function getProductsFromCsv()
{
// "00000001","F1000","Fudge","Invenire percipitur eum ea, in saepe persequeris has, meis dicta albucius an vix. Utinam nonumes necessitatibus vel ne. Ad mea tacimates temporibus. Duo dicam timeam integre in. Ius an libris latine, ludus inimicus quo te, ridens scripta placerat in pri. Nec ex feugiat abhorreant.","0.10","1","95_2542284"
$labels = array('id', 'sku', 'title', 'description', 'price', 'special', 'link');
$fh = fopen('./Model/products.csv', 'r');
if ($fh) {
while (!feof($fh)) {
$row = fgetcsv($fh);
$tempRow = array();
if (isset($row) && is_array($row) && count($row) > 0) {
foreach($row as $key => $value) {
$tempRow[$labels[$key]] = $value;
}
$this->products[] = $tempRow;
}
}
}
}
public function getProducts()
{
return $this->products;
}
public function getTitles()
{
$titles = array();
foreach ($this->products as $row) {
$titles[] = $row['title'];
}
return $titles;
}
}
