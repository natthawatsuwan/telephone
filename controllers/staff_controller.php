<?php
class staffController
{ 
	public function index()
	{ 
			$staff_list = Staff::getAll();
			require_once('views/staff/index_staff.php');
	}
	public function newStaff()
	{
		$position_list = Position::getAll();
		require_once('views/staff/newStaff.php');
	}
	public function addStaff()
	{
		$id = $_GET['staffID'];
		$name = $_GET['name'];
		$lname = $_GET['lname'];
		$posID = $_GET['posID'];
		Staff::Add($id,$name,$lname,$posID);
		StaffController::index();
	}
	public function search()
	{
		$key = $_GET['key'];
		$staff_list = Staff::search($key);
		require_once('views/staff/index_staff.php');
	}
	public function searchP()
	{
		$key = $_GET['key'];
		$staff_list = Promo::search($key);
		require_once('views/staff/index_search.php');
	}
	
	public function updateForm()
    {
        $id = $_GET['staffID'];       
        $staff = Staff::get($id);
        $position_list = Position::getAll();
        require_once('views/staff/updateForm.php');
    }
	public function update()
	{
		$id = $_GET['staffID'];
		$name = $_GET['name'];
		$lname = $_GET['lname'];
		$posID = $_GET['posID'];
		Staff::update($id,$name,$lname,$posID);
		StaffController::index();
	}
	public function deleteConfirm()
	{
		$id = $_GET['staffID'];       
        $staff = Staff::get($id);
        require_once('views/staff/deleteConfirm.php');
	}
	public function delete()
	{$id = $_GET['staffID'];Staff::delete($id);StaffController::index();}
}
?>