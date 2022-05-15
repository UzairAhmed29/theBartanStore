<?php

namespace App;

class Wishlist
{
    public $items;

    public $totalQuantity = 0;

    public $totalPrice = 0;

    public function __construct($oldWishlist)
    {
    	if($oldWishlist) {
    		$this->items = $oldWishlist->items;
    		$this->totalQuantity = $oldWishlist->totalQuantity;
    		$this->totalPrice = $oldWishlist->totalPrice;
    	}
    }

    public function add($item, $id)
    {
    	$storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
    	if($this->items) {
    		if(array_key_exists($id, $this->items)) {
    			$storedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qty']++;
    	$storedItem['price'] = $item->price * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQuantity++;
    	$this->totalPrice += $item->price;
    }

}
