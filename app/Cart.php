<?php

namespace App;

class Cart
{
    public $items;
    public $totalQty;
    public $totalAmount;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalAmount=$oldCart->totalAmount;
        }else{
            $this->items=null;
        }
    }
    public function Add($content, $id){
        $storeItem=['qty'=>0, 'price'=>$content->content_price, 'content'=>$content];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeItem=$this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price']=$content->content_price * $storeItem['qty'];
        $this->items[$id]=$storeItem;
        $this->totalQty++;
        $this->totalAmount +=$content->content_price;
    }
    public function reduceCart($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['content']['content_price'];
        $this->totalQty--;
        $this->totalAmount -=$this->items[$id]['content']['content_price'];

        if($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }
    public function increaseCart($id){
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['content']['content_price'];
        $this->totalQty++;
        $this->totalAmount += $this->items[$id]['content']['content_price'];
    }
}
