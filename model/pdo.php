<?php 
/* kết nối csdl */
function pdo_get_connection(){
	$dsn = 'mysql:host=localhost;dbname=doan2;charset=utf8';
	$username = 'minhthanh';
	$password = '';

	$conn = new PDO($dsn,$username,$password);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	return $conn;
}
/**
* Thực thi các câu lệnh sql(INSERT,UPDATE,DELETE)
* @param string $sql câu lệnh sql
* @param array $args mảng giá trị cung cấp cho các tham số của $sql
* @throws PDOException lỗi thực thi câu lệnh 
*/	
function pdo_execute($sql){
	$sql_args = array_slice(func_get_args(), 1);
	try {
		$conn = pdo_get_connection();
		$stmt = $conn->prepare($sql);
		$stmt->execute($sql_args);
		$stmt->closeCursor();
	}
	catch (Exception $e) {
		throw $e;
	}
	finally{
		unset($conn);
	}
}

function pdo_execute_last_id($sql){
	$sql_args = array_slice(func_get_args(), 1);
	try {
		$conn = pdo_get_connection();
		$stmt = $conn->prepare($sql);
		$stmt->execute($sql_args);
		return $conn->lastInsertId();
	}
	catch (Exception $e) {
		throw $e;
	}
	finally{
		unset($conn);
	}
}
/**
* Thực thi câu lệnh sql truy vấn dữ liệu(SELECT)
* @param string $sql câu lệnh sql
* @param array $args mảng giá trị cung cấp cho các tham số của $sql
* @return array mảng các bản ghi
* @throws PDOException lỗi thực thi câu lệnh 
*/
function pdo_query($sql){
	$sql_args = array_slice(func_get_args(), 1);
	try {
		$conn = pdo_get_connection();
		$stmt = $conn->prepare($sql);
		$stmt->execute($sql_args);
		$rows = $stmt->fetchAll();
		return $rows;
		$stmt->closeCursor();
	}
	catch (Exception $e) {
		throw $e;
	}
	finally{
		unset($conn);
	}
}
/**
* Thực thi câu lệnh sql truy vấn dữ liệu(SELECT)
* @param string $sql câu lệnh sql
* @param array $args mảng giá trị cung cấp cho các tham số của $sql
* @return array mảng các bản ghi
* @throws PDOException lỗi thực thi câu lệnh 
*/
function pdo_query_one($sql){
	$sql_args = array_slice(func_get_args(), 1);
	try {
		$conn = pdo_get_connection();
		$stmt = $conn->prepare($sql);
		$stmt->execute($sql_args);
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rows;
		$stmt->closeCursor();
	}
	catch (Exception $e) {
		throw $e;
	}
	finally{
		unset($conn);
	}
}
/**
* Thực thi câu lệnh sql truy vấn dữ liệu(SELECT)
* @param string $sql câu lệnh sql
* @param array $args mảng giá trị cung cấp cho các tham số của $sql
* @return array mảng các bản ghi
* @throws PDOException lỗi thực thi câu lệnh 
*/
function pdo_query_value($sql){
	$sql_args = array_slice(func_get_args(), 1);
	try {
		$conn = pdo_get_connection();
		$stmt = $conn->prepare($sql);
		$stmt->execute($sql_args);
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);
		return array_values($rows)[0];
		$stmt->closeCursor();
	}
	catch (Exception $e) {
		throw $e;
	}
	finally{
		unset($conn);
	}
}


