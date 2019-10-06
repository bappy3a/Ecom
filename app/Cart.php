<?php

namespace App;



class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    /*----------------------------Nakshi Offer start----------------------------*/
    public function add($item, $id){

        $storedItem = ['qty' => 0, 'productPrice' => $item->productPrice, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['productPrice'] = $item->productPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->productPrice;
    }


    public function removeItem($id){

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'];
        unset($this->items[$id]);
    }
    /*----------------------------Nakshi Offer end----------------------------*/

    /*----------------------------Nakshi start----------------------------*/
    public function addNakshi($item, $id){

        $storedItem = ['qty' => 0, 'productPrice' => $item->productPrice, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['productPrice'] = $item->productPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->productPrice;
    }


    public function removeItemNakshi($id){

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'];
        unset($this->items[$id]);
    }
    /*----------------------------Nakshi end----------------------------*/


    /*----------------------------Bed Offer start----------------------------*/
    public function addBedOffer($item, $id){

        $storedItem = ['qty' => 0, 'productPrice' => $item->productPrice, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['productPrice'] = $item->productPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->productPrice;
    }


    public function removeItemBedOffer($id){

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'];
        unset($this->items[$id]);
    }
    /*----------------------------Bed Offer end----------------------------*/

    /*----------------------------Bed start----------------------------*/
    public function addBed($item, $id){

        $storedItem = ['qty' => 0, 'productPrice' => $item->productPrice, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['productPrice'] = $item->productPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->productPrice;
    }



    public function removeItemBed($id){

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'];
        unset($this->items[$id]);
    }
    /*----------------------------Bed end----------------------------*/


    /*----------------------------Latest start----------------------------*/
    public function addLatest($item, $id){

        $storedItem = ['qty' => 0, 'productPrice' => $item->productPrice, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['productPrice'] = $item->productPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->productPrice;
    }


    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['productPrice'] -= $this->items[$id]['item']['productPrice'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['productPrice'];

        if($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }
    public function removeItemLatest($id){

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'];
        unset($this->items[$id]);
    }
    /*----------------------------Latest end----------------------------*/


    /*----------------------------Sale start----------------------------*/
    public function addSale($item, $id){

        $storedItem = ['qty' => 0, 'productPrice' => $item->productPrice, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['productPrice'] = $item->productPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->productPrice;
    }

    public function removeItemSale($id){

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'];
        unset($this->items[$id]);
    }
    /*----------------------------Sale end----------------------------*/











}
