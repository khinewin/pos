<?php

namespace App;


class Cart
{
    public $items;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;

        }else{
            $this->items=null;
        }
    }

    public function add($item, $id){
        $storeItem=['item'=>$item, 'qty'=>0, 'price'=>$item->p_price];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeItem=$this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] =$item->p_price * $storeItem['qty'];
        $this->items[$id]=$storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->p_price * $storeItem['qty'];
    }
    public function reduce($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['p_price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['p_price'];
        if($this->items[$id]['qty'] <=0 ){
            unset($this->items[$id]);
        }
    }
    public function increase($id){
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['item']['p_price'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['item']['p_price'];

    }
}
