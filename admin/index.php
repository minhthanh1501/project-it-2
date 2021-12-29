<?php
session_start();
ob_start();
	include("../model/pdo.php");
	include("header.php");
	//controller
	if (isset($_GET['act'])) {
		$thongbao[] = '';
		$act  = $_GET['act'];
		switch ($act) {
			case 'adddm':
				if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
					$nameCate = $_POST['nameCate'];
					$typesCate = $_POST['typesCate'];
					$created_at = $updated_at = date('Y-m-d H:s:i');
					$sql = 'INSERT INTO category(name,created_at,updated_at,types) Values("'.$nameCate.'","'.$created_at.'","'.$updated_at.'","'.$typesCate.'")';
					pdo_execute($sql);
					$thongbao['mes'] = 'thêm danh mục thành công';
							}
				include("./category/add.php");
				break;
			case 'suadm':
				if (isset($_GET['id'])&&($_GET['id'])) {
					$query = 'SELECT * FROM category WHERE id ='.$_GET['id'];
					$load__danhmuc__update = pdo_query_one($query);
				}
				include("category/update.php");
				break;
			case 'updatedm':
				if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
						if (isset($_POST['idCate'])) {
							$idCate = $_POST['idCate'];
						}
						if (isset($_POST['nameCate'])) {
							$nameCate = $_POST['nameCate'];
						}
						if (isset($_POST['typesCate'])) {
							$typesCate = $_POST['typesCate'];
						}
						$updated_at = date('Y-m-d H:s:i');
						$sql = 'UPDATE category SET name = "'.$nameCate.'",types ="'.$typesCate.'", updated_at ="'.$updated_at.'"WHERE id = '.$idCate;
						pdo_execute($sql);
					}
				$query ='SELECT COUNT(id) as number from category';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

				$query = 'SELECT * FROM category order by id asc limit '.$index.',10';
				$load__danhmuc = pdo_query($query);
				include("./category/list.php");
				break;
			case 'deletedm':
				if (isset($_GET['id'])&&($_GET['id'])>0) {
					$id = $_GET['id'];
					$sql = 'DELETE FROM category WHERE id ='.$id;
					pdo_execute($sql);
				}
				$query ='SELECT COUNT(id) as number from category';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

				$query = 'SELECT * FROM category order by id asc limit '.$index.',10';
				$load__danhmuc = pdo_query($query);
				include("category/list.php");
				break;
			case 'listCategory':
				$query ='SELECT COUNT(id) as number from category';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

				$query = 'SELECT * FROM category order by id asc limit '.$index.',10';
				$load__danhmuc = pdo_query($query);
				include("./category/list.php");
				break;
			// end list category
			// list product
			case 'listProduct':
				if ($_SESSION['user']['role'] == 'seller') {
					$id_users = $_SESSION['user']['id'];
				}

				
				if ($_SESSION['user']['role'] == 'seller') {
					$query ='SELECT COUNT(id) as number from product WHERE id_users ='.$id_users;
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

					$query = 'SELECT * FROM product WHERE id_users ="'.$id_users.'" order by id asc limit '.$index.',10';
					$load__sanpham = pdo_query($query);
				}else if ($_SESSION['user']['role'] == 'admin') {
					$query ='SELECT COUNT(id) as number from product';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

					$query = 'SELECT * FROM product order by id asc limit '.$index.',10';
					$load__sanpham = pdo_query($query);
				}

				
				include("products/list.php");
				break;
			case 'addsp':
				$query = 'SELECT brand.id,brand.name FROM brand';
				$brand = pdo_query($query);

				$query = 'SELECT category.id,category.name FROM category';
				$category = pdo_query($query);

				$query = 'SELECT id FROM `product` ORDER by id DESC LIMIT 1';
				$product = pdo_query_one($query);

				if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
					$namePro = $_POST['namePro'];
					$pricePro = $_POST['pricePro'];
					$discountPro = $_POST['discountPro'];
					$descriptionPro = $_POST['descriptionPro'];
					$image = $_FILES['imagePro']['name'];
					$id_users = $_POST['id_users'];
					$id_brand = $_POST['id_brand'];
					$id_category = $_POST['id_category'];
					// $id_product = $product['id'] + 1;

					$target_dir = "../upload/";
					$target_file = $target_dir . basename($_FILES['imagePro']['name']);
					if (move_uploaded_file($_FILES['imagePro']['tmp_name'], $target_file))
					{
						// echo "ok";
  					} else
  					{
  						// echo "ko";
  					}
  					$bestseller = $sale = $new = 0;
					$created_at = $updated_at = date('Y-m-d H:s:i');

					$sql = 'INSERT INTO product(name,price,price_del,thumbnail,content,bestseller,sale,new,id_users,id_brand,created_at,updated_at) Values("'.$namePro.'","'.$pricePro.'","'.$discountPro.'","'.$image.'","'.$descriptionPro.'","'.$bestseller.'","'.$sale.'","'.$new.'","'.$id_users.'","'.$id_brand.'","'.$created_at.'","'.$updated_at.'")';
					$id_product = pdo_execute_last_id($sql);

					$sql = 'INSERT INTO product_categories(id_category,id_product) VALUES ('.$id_category.','.$id_product.')';
					pdo_execute($sql);
					$thongbao['mes'] = 'Thêm sản phẩm thành công';
				}
				include("./products/add.php");
				break;
				case 'suasp':
				if (isset($_GET['id'])&&($_GET['id'])) {
					$query = 'SELECT * FROM product WHERE id ='.$_GET['id'];
					$load__sanpham__update = pdo_query_one($query);
				}
				include("./products/update.php");
				break;
			case 'updatesp':
				if ($_SESSION['user']['role'] == 'seller') {
					$id_users = $_SESSION['user']['id'];
				}

				if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
						$id = $_POST['id'];
						$name = $_POST['name'];
						$price = $_POST['price'];
						$price_del = $_POST['price_del'];
						$image = $_FILES['image']['name'];

						$target_dir = "../upload/";
						$target_file = $target_dir . basename($_FILES['image']['name']);
						if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
						{
							// echo "ok";
  						} else
  						{
  							// echo "ko";
  						}

						$updated_at = date('Y-m-d H:s:i');
						$sql = 'UPDATE product SET name = "'.$name.'",price ="'.$price.'",price_del ="'.$price_del.'",thumbnail ="'.$image.'", updated_at ="'.$updated_at.'"WHERE id = '.$id;
						pdo_execute($sql);
					}
					if ($_SESSION['user']['role'] == 'seller') {
					$query ='SELECT COUNT(id) as number from product WHERE id_users ='.$id_users;
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

					$query = 'SELECT * FROM product WHERE id_users ="'.$id_users.'" order by id asc limit '.$index.',10';
					$load__sanpham = pdo_query($query);
				}else if ($_SESSION['user']['role'] == 'admin') {
					$query ='SELECT COUNT(id) as number from product';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

					$query = 'SELECT * FROM product order by id asc limit '.$index.',10';
					$load__sanpham = pdo_query($query);
				}
				include("./products/list.php");
				break;
			case 'deletesp':
				if ($_SESSION['user']['role'] == 'seller') {
					$id_users = $_SESSION['user']['id'];
				}

				if (isset($_GET['id'])&&($_GET['id'])>0) {
					$id = $_GET['id'];
					$sql = 'DELETE FROM product WHERE id ='.$id;
					pdo_execute($sql);
				}
				if ($_SESSION['user']['role'] == 'seller') {
					$query ='SELECT COUNT(id) as number from product WHERE id_users ='.$id_users;
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

					$query = 'SELECT * FROM product WHERE id_users ="'.$id_users.'" order by id asc limit '.$index.',10';
					$load__sanpham = pdo_query($query);
				}else if ($_SESSION['user']['role'] == 'admin') {
					$query ='SELECT COUNT(id) as number from product';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

					$query = 'SELECT * FROM product order by id asc limit '.$index.',10';
					$load__sanpham = pdo_query($query);
				}
				include("./products/list.php");
				break;
			// end list product
			// users
			case 'listUsers':
				$query ='SELECT COUNT(id) as number from users';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;

				$query = 'SELECT * FROM users order by role asc limit '.$index.',10';
				$load__nguoidung = pdo_query($query);
				include("users/list.php");
				break;
			case 'suand':
				if (isset($_GET['id'])&&($_GET['id'])) {
					$query = 'SELECT * FROM users WHERE id ='.$_GET['id'];
					$load__nguoidung__update = pdo_query_one($query);
				}
				include("users/update.php");
				break;
			case 'updatend':
				if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
						if (isset($_POST['idUser'])) {
							$idUser = $_POST['idUser'];
						}
						if (isset($_POST['nameUser'])) {
							$nameUser = $_POST['nameUser'];
						}
						if (isset($_POST['roleUser'])) {
							$roleUser = $_POST['roleUser'];
						}
						$sql = 'UPDATE users SET role = "'.$roleUser.'"WHERE id = '.$idUser;
						pdo_execute($sql);
					}
				$query ='SELECT COUNT(id) as number from users';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/10);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*10;
					
				$query = 'SELECT * FROM users order by role asc';
				$load__nguoidung = pdo_query($query);
				include("users/list.php");
				break;
			// end users
			case 'login':
				$thongbao[] = $email = $password ="";
				if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
					if (isset($_POST['email'])) {
						$email = $_POST['email'];
					}
					if (isset($_POST['password'])) {
						$password = $_POST['password'];
					}
					if (empty($email) && empty($password)) {
						$thongbao['check'] = 'vui lòng nhập đầy đủ thông tin.';
					}else{
						$query = 'SELECT * FROM users WHERE email = "'.$email.'" AND password = "'.$password.'"';
						$data = pdo_query_one($query);
						if (is_array($data)) {
							$_SESSION['user'] = $data;
						}
						header('location: index.php');
						ob_end_flush();
					}
					
				}
				include("home.php");
				break;
			// end login
			case 'logout':
				unset($_SESSION['user']);
				header('location: ../views/index.php');
				break;
			case 'edit_account':
				if (isset($_POST['capnhat'])&&($_POST['capnhat']) != "") {
					$id = $_POST['id'];
					$fullname = $_POST['fullname'];
					$address = $_POST['address'];
					$tel = $_POST['tel'];
					$email = $_POST['email'];
					$avatar = $_FILES['avatar']['name'];

					$target_dir = "../upload/";
					$target_file = $target_dir . basename($_FILES['avatar']['name']);
					if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file))
					{
						// echo "ok";
  					} else
  					{
  						// echo "ko";
  					}

  					$sql = 'UPDATE users SET fullname ="'.$fullname.'",tel ="'.$tel.'",email ="'.$email.'",avatar ="'.$avatar.'",address = "'.$address.'" WHERE id = "'.$id.'"';
  					pdo_execute($sql);
  					$thongbao['mes'] = "Đã cập nhật";
				}
				include("../views/editAccount.php");
				break;
			case 'edit_password':
				if (isset($_POST['capnhat'])&&$_POST['capnhat']!="") {
					$id = $_POST['id'];
					$oldpassword = $_POST['oldpassword'];
					$password = $_POST['password'];
					$repassword = $_POST['repassword'];

					$query = 'SELECT password FROM users WHERE id ="'.$id.'"';
					$row = pdo_query_one($query);
					if (empty($oldpassword)) {
						$thongbao['oldpassword'] = 'vui lòng nhập thông tin';
					}
					else if ($oldpassword != $row['password']) {
						$thongbao['oldpassword'] = 'mật khẩu cũ không đúng';
					}

					if (empty($password)) {
						$thongbao['password'] = 'vui lòng nhập thông tin';
					}

					if (empty($repassword)) {
						$thongbao['repassword'] = 'vui lòng nhập thông tin';
					}else if ($repassword != $password) {
						$thongbao['password'] = 'Xác nhận mật khẩu không khớp.';
					}

					if (empty($thongbao['oldpassword']) && empty($thongbao['password']) && empty($thongbao['repassword'])) {
						$sql = 'UPDATE users SET password = "'.$password.'"WHERE id = '.$id;
						pdo_execute($sql);
						$thongbao['mes'] = 'Đổi mật khẩu thành công.';
					}

				}
				include("../views/repassword.php");
				break;
			default:
				include("home.php");
				break;
		}
	}else{
		include("home.php");
	}
	include("footer.php");