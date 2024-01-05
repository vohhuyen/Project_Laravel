<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Cart extends Model
{
    use HasFactory;
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $standard = 0;
    public $totalPayment = 0;
    public function __construct($oldCart)
    {
        if ($oldCart) {
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
        $this->standard = $oldCart->standard;
        $this->totalPayment = $oldCart->totalPayment;
        }
    }
    public function addCart($item, $id, $size, $shop, $provider, $detailProvider, $qty = 1) {
        $uniqueKey = $id . '_' . $size;
        if (isset($this->items[$uniqueKey])) {
            $this->items[$uniqueKey]['qty'] += $qty;
            $this->items[$uniqueKey]['pricePr'] = $item->pricePr * $this->items[$uniqueKey]['qty'];
        } else {
            $this->items[$uniqueKey] = [
                'qty' => $qty,
                'pricePr' => $item->pricePr * $qty,
                'size' => $size,
                'nameshop' => $shop,
                'nameprovider' => $provider,
                'detailProvider' => $detailProvider,
                'item' => $item
            ];
        }
        $this->totalQty += $qty;
        $this->totalPrice += $item->pricePr * $qty;
    
        $idOPrObject = DB::table('OriginalProductsDetail')->select('idOPr')->where('idOPrDetail', $item->idOPrDetail)->first();
        $idOPr = $idOPrObject ? $idOPrObject->idOPr : null;
        $detailProvider = DB::table('DetailProvider')->select('shippingCost')->where('idOPr', $idOPr)->where('idProvider', $item->idProvider)->first();
        $shippingCost = $detailProvider ? $detailProvider->shippingCost : 0;
        $this->standard = $this->standard + $shippingCost;
        $this->totalPayment = $this->standard + $this->totalPrice;
    }
    public function increaseQuantity($productId,  $size)
    {
        $uniqueKey = $productId . '_' . $size;
        if (isset($this->items[$uniqueKey])) {
            $this->items[$uniqueKey]['qty']++;
            $this->items[$uniqueKey]['pricePr'] += $this->items[$uniqueKey]['item']->pricePr;
            $this->totalQty++;
            $this->totalPrice += $this->items[$uniqueKey]['item']->pricePr;
            $this->totalPayment = $this->standard + $this->totalPrice;
        }
    }
    public function decreaseQuantity($productId,  $size)
    {
        $uniqueKey = $productId . '_' . $size;
        if (isset($this->items[$uniqueKey])) {
            $this->items[$uniqueKey]['qty']--;
            $this->items[$uniqueKey]['pricePr'] -= $this->items[$uniqueKey]['item']->pricePr;
            $this->totalQty--;
            $this->totalPrice -= $this->items[$uniqueKey]['item']->pricePr;
            $this->totalPayment = $this->standard + $this->totalPrice;

            if ($this->items[$uniqueKey]['qty'] <= 0) {
                unset($this->items[$uniqueKey]);
            }
        }
    }
    public function deleteItem($productId,  $size){
        $uniqueKey = $productId . '_' . $size;
        $this->items[$uniqueKey]['pricePr'] = 0;
        $this->standard = 0;
        $this->totalQty = 0;
        $this->totalPrice = 0;
        $this->totalPayment = 0;
        unset($this->items[$uniqueKey]);
    }
    public function reduceByOne($id)
      {
        $this->items[$id]['qty']--;
        $this->items[$id]['pricePr'] -= $this->items[$id]['item']['pricePr'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['pricePr'];
        if ($this->items[$id]['qty'] <= 0) {
          unset($this->items[$id]);
        }
      }
      //xóa nhiều                 
    public function removeItem($id)
      {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['pricePr'];
        unset($this->items[$id]);
      } 

}
