<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Cart extends Model
{
    use HasFactory;
    // protected $table = "cart";
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $standard = 0;
    public $totalPayment = 0;
    // public $Express = 0;
    // public $futureDate1 = 0;
    // public $futureDate2 = 0;
    // public $futureDate3 = 0;
    // public $futureDate4 = 0;
    public function __construct($oldCart)
    {
        if ($oldCart) {
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
        $this->standard = $oldCart->standard;
        $this->totalPayment = $oldCart->totalPayment;
        // $this->Express = $oldCart->Express;
        // $this->futureDate1 = $oldCart->futureDate1;
        // $this->futureDate2 = $oldCart->futureDate2;
        // $this->futureDate3 = $oldCart->futureDate3;
        // $this->futureDate4 = $oldCart->futureDate4;
        }
    }
    public function addCart($item, $id, $size, $shop, $provider, $detailProvider, $qty = 1){
        $cart = [
            'qty' => 0,
            'pricePr' => $item->pricePr,
            'size' => $size,
            'nameshop' => $shop,
            'nameprovider' => $provider,
            'detailProvider' => $detailProvider,
            'item' =>$item
        ];
        if($this->item){
            if(array_key_exists($id, $this->items)){
                $cart = $this->item[$id];
            }
        }
        $cart['qty'] = $cart['qty'] + $qty;
        $cart['pricePr'] = $item->pricePr * $cart['qty'];
        $this->items[$id] = $cart;
        $this->totalQty = $this->totalQty + $qty;
        $this->totalPrice += $item->pricePr * $cart['qty'];

        $idOPrObject = DB::table('OriginalProductsDetail')->select('idOPr')->where('idOPrDetail', $item->idOPrDetail)->first();
        $idOPr = $idOPrObject ? $idOPrObject->idOPr : null;
        $detailProvider = DB::table('DetailProvider')->select('shippingCost')->where('idOPr', $idOPr)->where('idProvider', $item->idProvider)->first();
        $shippingCost = $detailProvider ? $detailProvider->shippingCost : 0;
        $this->standard = $this->standard + $shippingCost;
        $this->totalPayment = $this->standard + $this->totalPrice;
        // $this->Express = $this->totalPayment + 20;

        // $time = DB::table('DetailProvider')->select('productTime')->where('idOPr', $idOPr)->where('idProvider', $item->idProvider)->first();
        // $productTime = $time ? $time->productTime : 0;
        // $currentDate = Carbon::now();
        // $futureDate1 = clone $currentDate;
        // $this->futureDate1 = $futureDate1->addDays($productTime)->addDays(10);
        // $futureDate2 = clone $currentDate;
        // $this->futureDate2 = $futureDate2->addDays($productTime)->addDays(13);
        // $futureDate3 = clone $currentDate;
        // $this->futureDate3 = $futureDate3->addDays($productTime)->addDays(5);
        // $futureDate4 = clone $currentDate;
        // $this->futureDate4 = $futureDate4->addDays($productTime)->addDays(8);

    }
    public function increaseQuantity($productId)
    {
        if ($this->items && array_key_exists($productId, $this->items)) {
            $this->items[$productId]['qty']++;
            $this->items[$productId]['pricePr'] += $this->items[$productId]['item']->pricePr;
            $this->totalQty++;
            $this->totalPrice += $this->items[$productId]['item']->pricePr;
            $this->totalPayment = $this->standard + $this->totalPrice;
            // $this->Express = $this->totalPayment + 20;
        }
    }
    public function decreaseQuantity($productId)
    {
        if ($this->items && array_key_exists($productId, $this->items)) {
            $this->items[$productId]['qty']--;
            $this->items[$productId]['pricePr'] -= $this->items[$productId]['item']->pricePr;
            $this->totalQty--;
            $this->totalPrice -= $this->items[$productId]['item']->pricePr;
            $this->totalPayment = $this->standard + $this->totalPrice;
            // $this->Express = $this->totalPayment + 20;

            if ($this->items[$productId]['qty'] <= 0) {
                unset($this->items[$productId]);
            }
        }
    }
    public function deleteItem($idProduct){
        $this->items[$idProduct]['pricePr'] = 0;
        $this->standard = 0;
        $this->totalQty = 0;
        $this->totalPrice = 0;
        $this->totalPayment = 0;
        // $this->Express = 0;
        unset($this->items[$idProduct]);
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
