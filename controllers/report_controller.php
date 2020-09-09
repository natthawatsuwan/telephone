<?php
class reportController
{ 
	public function bill_search(){
		require_once('views/report/bill_search.php');
	}
public function billing(){
		$M = $_GET['month'];
		$Y = $_GET['year'];
		$bill_list = Bill::search($M,$Y);
		require_once('views/report/billing.php');
	}
	public function bill_detail(){
		$PNumber = $_GET['PNumber'];//fixx
		$bill_list = Bill::bill_detail($PNumber);
		require_once('views/report/bill_detail.php');
	}
	public function current() {
	$current = Current::get();
	$currents = Current::gets();
	require_once('views/report/current.php');
	}
	
public function current_detail() {
	$Number = $_GET['Number'];
	$current = Current::current_detail($Number);
	require_once('views/report/current_detail.php');
	}
	public function history() {
	$history = History::get();
	require_once('views/report/history.php');
	}
	
public function history_detail() {
	$PhoneNo = $_GET['PhoneNo'];
	$history = History::history_detail($PhoneNo);
	require_once('views/report/history_detail.php');
	}
	public function bill_payment(){ 
		$PNumber = $_GET['PNumber'];
		$M = $_GET['month'];
		$Y = $_GET['year'];
	  $payment_list = Pay::bill_payment($PNumber,$M,$Y);
		require_once('views/report/payment.php');
	}
	
	public function addNumber(){
		$promotion_list = Promotion::getAll();
		require_once('views/report/addNumber.php');
    }
	public function NewNumber($IDNumber,$CID,$PID){
		$IDNumber = $_GET ['IDNumber'];
		$CID = $_GET ['CID'];
		$PID = $_GET ['PID'];
		echo $IDNumber;
		echo $CID;
		echo $PID;
		AddN::Add($IDNumber,$CID,$PID);
    }
	public function promotion(){
		$promotion_list = Promotion::getAll();
		require_once('views/report/promotion_index.php');
    }
    public function balance($IDNumber){
    
		$IDNumber = $_GET ['$IDNumber'];
		$balance_List=Bala::balance($IDNumber);
		//require_once('views/report/balance.php');
    }
}
?>