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
			// list productDetail
			case 'danhmuc':
				if (isset($_GET['id'])&&($_GET['id'])>0) {
					$id = $_GET['id'];

					$query ='SELECT id FROM category';
					$compareCate = pdo_query($query);

					foreach ($compareCate as $compareCate) {
						if ($id == $compareCate['id']) {
							$idCompare = $compareCate['id'];
						}
					}


					$query ='SELECT COUNT(product.id) as number from ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product_categories.id_category = "'.$id.'"';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/12);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*12;

					$query = 'SELECT product.name,product.thumbnail,product.price,product.price_del,product.id FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product_categories.id_category = "'.$id.'"ORDER BY product_categories.id ASC LIMIT '.$index.',12';
					$danhmuc = pdo_query($query);

				}else{
					include("home.php");
				}
				include('listProducts.php');
				break;
			case 'danhmuc-asc':
				if (isset($_GET['id'])) {
					$id = $_GET['id'];

					$query ='SELECT id FROM category';
					$compareCate = pdo_query($query);

					foreach ($compareCate as $compareCate) {
						if ($id == $compareCate['id']) {
							$idCompare = $compareCate['id'];
						}
					}

					$query = 'SELECT count(product.id) as number FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product_categories.id_category = '.$id.' ORDER BY price ASC';
					$count = pdo_query($query);
					$number = 0;
					if ($count != null && count($count) >0) {
						$number = $count[0]['number'];
					}
					$pages = ceil($number/12);

					$current_page = 1;
					if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
					}
					
					$index = ($current_page - 1)*12;

					$query = 'SELECT product.name,product.thumbnail,product.price,product.price_del,product.id FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product_categories.id_category = '.$id.' ORDER BY price ASC limit '.$index.',12';
					$danhmuc = pdo_query($query);
				}
				include("listProducts.php");
				break;
			case 'danhmuc-desc':
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
				}

				$query ='SELECT id FROM category';
					$compareCate = pdo_query($query);

					foreach ($compareCate as $compareCate) {
						if ($id == $compareCate['id']) {
							$idCompare = $compareCate['id'];
						}
					}

				$query = 'SELECT count(product.id) as number FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product_categories.id_category = '.$id.' ORDER BY price DESC';
				$count = pdo_query($query);
				$number = 0;
				if ($count != null && count($count) >0) {
					$number = $count[0]['number'];
				}
				$pages = ceil($number/12);

				$current_page = 1;
				if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
				}
					
				$index = ($current_page - 1)*12;

				$query = 'SELECT product.name,product.thumbnail,product.price,product.price_del, product.id FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product_categories.id_category = '.$id.' ORDER BY price DESC limit '.$index.',12';
				$danhmuc = pdo_query($query);
				include("listProducts.php");
				break;
			case 'danhmuc-bestseller':
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
				
				$query ='SELECT id FROM category';
				$compareCate = pdo_query($query);

				foreach ($compareCate as $compareCate) {
					if ($id == $compareCate['id']) {
						$idCompare = $compareCate['id'];
					}
				}

				$query = 'SELECT count(product.id) as number FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product.bestseller = 1 and product_categories.id_category = '.$id;
				$count = pdo_query($query);
				$number = 0;
				if ($count != null && count($count) >0) {
					$number = $count[0]['number'];
				}
				$pages = ceil($number/12);

				$current_page = 1;
				if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
				}
					
				$index = ($current_page - 1)*12;

				$query = 'SELECT product.name,product.thumbnail,product.price,product.price_del,product.id FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product.bestseller = 1 and product_categories.id_category = '.$id.' order by price asc limit '.$index.',12';
				$danhmuc = pdo_query($query);
				}
				include("listProducts.php");
				break;
			case 'danhmuc-new':
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
				
				$query ='SELECT id FROM category';
				$compareCate = pdo_query($query);

				foreach ($compareCate as $compareCate) {
					if ($id == $compareCate['id']) {
						$idCompare = $compareCate['id'];
					}
				}

				$query = 'SELECT count(product.id) as number FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product.new = 1 and product_categories.id_category = '.$id;
				$count = pdo_query($query);
				$number = 0;
				if ($count != null && count($count) >0) {
					$number = $count[0]['number'];
				}
				$pages = ceil($number/12);

				$current_page = 1;
				if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
				}
					
				$index = ($current_page - 1)*12;

				$query = 'SELECT product.name,product.thumbnail,product.price,product.price_del,product.id FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product.new = 1 and product_categories.id_category = '.$id;
				$danhmuc = pdo_query($query);
				}
				include("listProducts.php");
				break;
			case 'danhmuc-sale':
				if (isset($_GET['id'])) {
					$id = $_GET['id'];

				$query ='SELECT id FROM category';
				$compareCate = pdo_query($query);

				foreach ($compareCate as $compareCate) {
					if ($id == $compareCate['id']) {
						$idCompare = $compareCate['id'];
					}
				}

				$query = 'SELECT count(product.id) as number FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product.sale = 1 and product_categories.id_category = '.$id;
				$count = pdo_query($query);
				$number = 0;
				if ($count != null && count($count) >0) {
					$number = $count[0]['number'];
				}
				$pages = ceil($number/12);

				$current_page = 1;
				if (isset($_GET['trang'])) {
						$current_page = $_GET['trang'];
				}
					
				$index = ($current_page - 1)*12;
				
				$query = 'SELECT product.name,product.thumbnail,product.price,product.price_del,product.id FROM ((product_categories INNER JOIN product ON product.id = product_categories.id_product) INNER JOIN category ON category.id = product_categories.id_category) WHERE product.sale = 1 and product_categories.id_category = '.$id;
				$danhmuc = pdo_query($query);
				}
				include("listProducts.php");
				break;
			case 'thuonghieu':
				if (isset($_GET['id'])&&($_GET['id']>0)) {
					$id = $_GET['id'];
					$query = 'SELECT product.* FROM product,brand WHERE brand.id = product.id_brand and brand.id = '.$id;
					$danhmuc = pdo_query($query);
				}
				include("listProducts.php");
				break;
			// end list productDetail
			case 'spdetail':
				if (isset($_GET['id'])&&($_GET['id'])>0) {
					$id = $_GET['id'];

					$query = 'SELECT * FROM product WHERE id = '.$id;
					$spdetail = pdo_query_one($query);

					$query = 'SELECT * FROM product_images WHERE id_product = '.$id;
					$spdetail_images = pdo_query_one($query);

					$query = 'SELECT * FROM product WHERE id != '.$id.' limit 10';
					$sprelated = pdo_query($query);
				}
				else{
					include("home.php");
				}	
				include("productDetail.php");
				break;
			// dang ki tai khoan
			case 'register':
			$thongbao[] = $fullname = $tel = $email = $password = $repassword = $role = "";
				if (isset($_POST['dangky'])&&($_POST['dangky'])) {
					if (isset($_POST['fullname'])) {
						$fullname = $_POST['fullname'];
					}
					if (isset($_POST['address'])) {
						$address = $_POST['address'];
					}
					if (isset($_POST['tel'])) {
						$tel = $_POST['tel'];
					}
					if (isset($_POST['email'])) {
						$email = $_POST['email'];
					}
					if (isset($_POST['password'])) {
						$password = $_POST['password'];
					}
					if (isset($_POST['repassword'])) {
						$repassword = $_POST['repassword'];
					}
					if (isset($_POST['role'])) {
						$role = $_POST['role'];
					}
					$avatar= null;
					if (empty($fullname)) {
						$thongbao['fullname'] = 'Bạn chưa nhập họ và tên.';
					}
					if (empty($tel)) {
						$thongbao['tel'] = 'Bạn chưa nhập số điện thoại.';
					}
					if (empty($email)) {
						$thongbao['email'] = 'Bạn chưa nhập email.';
					}
					if (empty($password)) {
						$thongbao['password'] = 'Bạn chưa nhập mật khẩu.';
					}
					if (empty($repassword)) {
						$thongbao['repassword'] = 'Bạn chưa nhập xác nhận mật khẩu.';
					}else{
						if ($password != $repassword) {
							$thongbao['repassword'] = 'Mật khẩu xác nhận không đúng.';
						}
					}
					if (empty($role)) {
						$thongbao['role'] = 'Bạn chưa nhập vai trò người dùng.';
					}
					if (empty($address)) {
						$thongbao['address'] = 'Bạn chưa nhập địa chỉ nhà.';
					}
					if (empty($thongbao['fullname']) && empty($thongbao['tel']) && empty($thongbao['email']) && empty($thongbao['password']) && empty($thongbao['repassword']) && empty($thongbao['role']) && empty($thongbao['address'])) {
						$sql = 'INSERT INTO users(fullname,tel,email,password,role,avatar,address) VALUES ("'.$fullname.'","'.$tel.'","'.$email.'","'.$password.'","'.$role.'","'.$avatar.'","'.$address.'")';
						pdo_execute($sql);
						$thongbao['mes'] = 'đăng kí thành công';
					}
				}
				include("Register.php");
				break;
			// end dang ki tai khoan
			// đăng nhập
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
				header('location: index.php');
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
				include("editAccount.php");
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
						$thongbao['repassword'] = 'Xác nhận mật khẩu không khớp.';
					}

					if (empty($thongbao['oldpassword']) && empty($thongbao['password']) && empty($thongbao['repassword'])) {
						$sql = 'UPDATE users SET password = "'.$password.'"WHERE id = '.$id;
						pdo_execute($sql);
						$thongbao['mes'] = 'Đổi mật khẩu thành công.';
					}

				}
				include("rePassword.php");
				break;
			case 'search':
				if (isset($_POST['timkiem'])&&($_POST['timkiem'])!="") {
					$timkiem = $_POST['timkiem'];
					$query = 'SELECT * FROM product WHERE name LIKE "%'.$timkiem.'%"';
					$danhmuc = pdo_query($query);
				}else
				{
					echo "nono";
				}
				include("listProducts.php");
				break;
			// case 'checkresult':
			// 	if (isset($_POST['price'])&&($_POST['price'])>=0) {
			// 		$rangePrice = $_POST['price'];
			// 		$rangeAfter = $rangePrice * 1000;
			// 		$query = 'SELECT * FROM product WHERE price <= '.$rangeAfter;
			// 		$danhmuc = pdo_query($query);
			// 	}
			// 	include("listProducts.php");
			// 	break;
			case 'findresult':
				if (isset($_POST['cb'])) {
					$cb = $_POST['cb'];
								
					$implode = implode(' ',$cb);

					$query = 'SELECT * FROM product where name LIKE "%'.$implode.'%"';
					$danhmuc = pdo_query($query);
				}
				include("listProducts.php");	
				break;
			case 'cart':
				include("cart.php");
				break;
			case 'addcart':
				if (isset($_POST['addcart'])&&($_POST['addcart'])) {
					if (!isset($_SESSION['cart'])) {
						$_SESSION['cart'] = [];
					}
					$id = $_POST['id'];
					$name = $_POST['name'];
					$image = $_POST['image'];
					$quantity = $_POST['quantity'];
					$price = $_POST['price'];
					$size = $_POST['size'];
					$tt = $quantity * $price;
					// kiem tra da co san pham chua
					$check = 0; // kiem tra san pham co trung hay khong

					for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
						if ($_SESSION['cart'][$i][1] == $name && $_SESSION['cart'][$i][5] == $size) {
							$check = 1;
							$quantitynew  = $quantity + $_SESSION['cart'][$i][3];
							$_SESSION['cart'][$i][3] = $quantitynew;
							break;
						}
					}
					if ($check == 0) {
						// them san pham vao cart
						$sp = [$id,$name,$image,$quantity,$price,$size,$tt];
						array_push($_SESSION['cart'],$sp);
					}
				}
				
				
				include("cart.php");
				break;
			case 'deletecart':
				if (isset($_GET['STT'])&&($_GET['STT'])>=0) {
					$stt = $_GET['STT'];
					// xoa san pham trong gio hang
					array_splice($_SESSION['cart'],$stt,1);
				}else
				{
					// lam rong~ gio hang
					unset($_SESSION['cart']);
				}
				
				include("cart.php");
				break;
			case 'bill':
				include("bill.php");
				break;
			case 'billconfirm':
				function tongdonhang(){
					$tong = 0;
					if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
						if (sizeof($_SESSION['cart'])>0) {
							for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
								$tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
								$tong+=$tt;
							}
						}
					}
					return $tong;
				}
				if (isset($_POST['xacnhan'])&&(isset($_POST['xacnhan']))) {
					// lấy dữ liệu khach hàng từ form	
						if (isset($_SESSION['user'])) {
							$id_users = $_SESSION['user']['id'];
						}else{
							$id_users = 0;
						}		

						$name = $_POST['name'];
						$email = $_POST['email'];
						$address = $_POST['address'];
						$tel = $_POST['tel'];
						$total = tongdonhang();
						$note = $_POST['note'];
					// insert đơn hàng - tạo đơn hàng mới
					$created_at = $updated_at = date('Y-m-d H:s:i');
					$sql = 'INSERT INTO the_order
							(id_users,fullname,email,address,tel,note,total,created_at,updated_at) 
							VALUES 
							("'.$id_users.'","'.$fullname.'","'.$email.'","'.$address.'","'.$tel.'","'.$note.'","'.$total.'","'.$created_at.'","'.$updated_at.'")';
					$last_id = pdo_execute_last_id($sql);

					// lấy thông tin giỏ hàng + id đơn hàng vừa tạo

					// insert vào bảng giỏ hàng
					foreach ($_SESSION['cart'] as $cart) {
						$sql = 'INSERT INTO order_details
								(id_order,id_product,id_the_order,quantity,price,size,thanhtien,created_at,updated_at)
								VALUES
								("'.$_SESSION['user']['id'].'","'.$cart[0].'","'.$last_id.'","'.$cart[3].'","'.$cart[4].'","'.$cart[5].'","'.$cart[6].'","'.$created_at.'","'.$updated_at.'")';
						pdo_execute($sql);
					}
			
					// unset giỏ hàng
					$_SESSION['cart']=[];
				}
				$query = 'SELECT * FROM the_order where id = '.$last_id;
				$theorder = pdo_query_one($query);

				$query = 'SELECT * FROM order_details where id_the_order = '.$last_id;
				$order_details = pdo_query($query);
				include("billconfirm.php");
				break;
			case 'mybill':
				if (isset($_SESSION['user'])) {
					$id_users = $_SESSION['user']['id'];
				}
				$query = 'SELECT * FROM the_order WHERE id_users ='.$id_users;
				$listbill = pdo_query($query);
				include("mybill.php");
				break;
			default:
				include("home.php");
				break;
		}
	}else{
		include("home.php");
	}
	include("footer.php");