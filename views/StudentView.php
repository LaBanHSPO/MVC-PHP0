<?php 
class StudentView {
	public function trangChu() {
		include_once('template-html/trangChu.php');
	}		
	public function showListStudent($list){		
		// html + php 
		echo ' <a href="index.php?controller=Student&action=create">  THÊM MỚI </a> 
			<table> 
			<tr>
				<td>Mã SV</td>
				<td>Họ Tên</td>
				<td>Giới Tính </td>
				<td>Quê Quán</td>
				<td>Chức năng XÓA</td>
				<td>Chức năng SỬA</td>
			</tr>';
			
			for ($i=0;$i<count($list);$i++) {
				if ($list[$i]['GioiTinh']==0) $list[$i]['GioiTinh']="Nam";
				else $list[$i]['GioiTinh']="Nữ";
				echo '<tr>
					<td> '.$list[$i]['MaSV'].' </td>
					<td>'.$list[$i]['HoTen'].'</td>
					<td>'.$list[$i]['GioiTinh'].' </td>
					<td>'.$list[$i]['QueQuan'].'</td>
					<td><a href="index.php?controller=Student&action=deleteStudent&id='.$list[$i]['id'].'"> XÓA </a> </td>
					<td><a href="index.php?controller=Student&action=updateStudent&id='.$list[$i]['id'].'">SỬA</a> </td>
				</tr>';
			}
							
		echo '</table>';
		
	}
	public function showCreateStudentForm(){
		echo '<form action="index.php?controller=Student&action=postCreateStudent" method="POST">
			Mã SV: <input type="text" name="MaSV" /> <br/>
			HoTen: <input type="text" name="HoTen" /> <br/>
			Giới Tính: <br/>
			Nam: <input type="radio" name="GioiTinh" value="0"/> <br/>
			Nữ <input type="radio" name="GioiTinh" value="1"/> <br/>
			Quê Quán: <input type="text" name="QueQuan"/> <br/>
			<input type="submit" value="TẠO"/>
		</form>';
	}	
	public function showUpdateStudentForm($student) {		
	 echo '<h1> SUA SINH VIEN  </h1>
		<form method="POST" action="index.php?controller=Student&action=postUpdateStudent&id='.$student['id'].'">
		Mã SV: <input type="text" name="MaSV" value="'.$student['MaSV'].'"/> <br/>
			HoTen: <input type="text" name="HoTen" value="'.$student['HoTen'].'"/> <br/>
			Giới Tính: <br/>';	
		if ($student['GioiTinh']==0) 
			echo  'Nam: <input type="radio" name="GioiTinh" value="0" checked/> <br/>
					Nữ <input type="radio" name="GioiTinh" value="1" /> <br/>';
		else 
			echo  'Nam: <input type="radio" name="GioiTinh" value="0"/> <br/>
					Nữ <input type="radio" name="GioiTinh" value="1" checked/> <br/>';	
					
		echo 'Quê Quán: <input type="text" name="QueQuan" value="'.$student['QueQuan'].'"/> <br/>
			<input type="submit" value="CẬP NHẬT"/>
		</form>';
	}
	
}
?>