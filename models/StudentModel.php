<?php 
class StudentModel {
	public function listStudent(){
		$con = mysqli_connect('localhost','root','','newdb');
		//$con->set_charset('utf8'); testing
		$result = $con->query('SELECT * FROM `SinhVien`');
		
		$dssv = array();
		if ($result->num_rows > 0) {
			while  ($sv = $result->fetch_assoc()) {
				$dssv[] = $sv;
			}
		}
		return $dssv;
	}
	public function save($student){
		$con = mysqli_connect('localhost','root','','newdb');
		$sql = 'INSERT INTO `sinhvien`( `MaSV`, `HoTen`, `GioiTinh`, `QueQuan`) 
				VALUES (\''.$student['MaSV'].'\',
				\''.$student['HoTen'].'\',
				\''.$student['GioiTinh'].'\',
				\''.$student['GioiTinh'].'\')';
				echo $sql;
		$result = $con->query($sql);
		return $result;
	}
	
	public function deleteById($id){
		$con = mysqli_connect('localhost','root','','newdb');
		$sql = 'DELETE FROM sinhvien WHERE id='.$id;
		$result = $con->query($sql);
		return $result;
	}
	
	public function findStudentById($id) {
	$con = mysqli_connect('localhost','root','','newdb');
		$sql = 'SELECT * FROM sinhvien WHERE id='.$id;
		$result = $con->query($sql);
		return $result->fetch_assoc();
	}
	
		public function update($student){
		$con = mysqli_connect('localhost','root','','newdb');
		$sql = 'UPDATE sinhvien SET 
					MaSV=\''.$student['MaSV'].'\',
					HoTen=\''.$student['HoTen'].'\',
					GioiTinh=\''.$student['GioiTinh'].'\',
					QueQuan=\''.$student['QueQuan'].'\'
					WHERE id='.$student['id'];
		$result = $con->query($sql);
		return $result;
	}
	
}
?>