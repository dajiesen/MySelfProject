<?php

class ShopProduct
{

    // private 只有本类可以调用
    // protected 只有本类和子类可以调用
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0; //折扣

    function __construct($title, $mainName, $firstName, $price)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;

    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName()
    {
       return $this->producerMainName;
    }
    
    public function getTitle() 
    {
        return $this->title;
    }
    
    public function getDiscount() 
    {
        return $this->discount;
    }

    public function setDiscount($num)
    {
        $this->discount = $num;
    }

    public function getPrice()
    {
        return $this->price - $this->discount;
    }

    function getProduct()
    {
        return $this->producerMainName . $this->producerFirstName;
    }

    public function getSummaryLine()
    {

        $base = $this->title . $this->producerMainName;
        $base .= $ths->producerFirstName;
        return $base;
    }
}

class CdProduct extends ShopProduct
{

    private $playLength;

    public function __construct($title, $firstName, $mainName, $firstName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= "playing time -" . $this->playLength;
        return $base;
    }
}

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    function getNumberOfPages()
    {
        return $this->numPages;
    }

    function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= "page count -" . $this->numPages;
        return $base;
    }
    
    public function getPrice()
    {
        return $this->price;
    }

}

class ShopProductWrite
{
    private $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = '';
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title} :";
            $str .= "{$shopProduct->getProducer()} :";
            $str .= "{$shopProduct->getPrice()} \n";
        }
        return $str;
    }
}

