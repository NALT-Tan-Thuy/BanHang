<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){ 
		$giohang = ['soluong'=>0, 'giabanhang' => $item->giaban, 'giagoc' => $item->giagoc, 'giakhuyenmai' => $item->khuyenmai, 'item' => $item]; 
		if($this->items){ 
			if(array_key_exists($id, $this->items)){ 
				$giohang = $this->items[$id]; 
			} 
		} 
		$giohang['soluong']++; 
		if($item->khuyenmai != 0){
			$tinhgia = $item->giagoc - ($item->giagoc*$item->khuyenmai)/100;
			$item->giaban = $tinhgia;
		} 
		else{ 
			$item->giaban = $item->giagoc; 			 
		} 
		$giohang['giabanhang'] = $item->giaban * $giohang['soluong']; 
		$this->items[$id] = $giohang; 
		$this->totalQty++; 
		$this->totalPrice += $item->giaban; 
	}
	// thêm hàng có số lượng
	public function ThemCoSoLuong($item, $id, $soluong){ 
		$giohang = ['soluong'=>$soluong, 'giabanhang' => $item->giaban, 'giagoc' => $item->giagoc, 'giakhuyenmai' => $item->khuyenmai, 'item' => $item]; 
		if($this->items){ 
			if(array_key_exists($id, $this->items)){ 
				$giohang = $this->items[$id]; 
			} 
		} 
		$giohang['soluong'] = $soluong; 
		if($item->khuyenmai != 0){
			$tinhgia = $item->giagoc - ($item->giagoc*$item->khuyenmai)/100;
			$item->giaban = $tinhgia;
		} 
		else{ 
			$item->giaban = $item->giagoc; 			 
		} 
		$giohang['giabanhang'] = $item->giaban * $soluong; 
		$this->items[$id] = $giohang; 
		$this->totalQty += $soluong; 
		$this->totalPrice += $giohang['giabanhang']; 
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['soluong']--;
		$trutien = $this->items[$id]['item']['giabanhang'];
		$this->items[$id]['giabanhang'] -= $trutien;
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['giabanhang'];
		if($this->items[$id]['soluong']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['soluong'];
		$this->totalPrice -= $this->items[$id]['giabanhang'];
		unset($this->items[$id]);
	}
}
