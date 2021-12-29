<div class="banner-black"></div>
<div class="container">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <?php
    if ($_SESSION['user']['role'] == 'seller') {
    ?>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
      </li>
    </ul>
    <?php }else if ($_SESSION['user']['role'] == 'admin') {
    ?>
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php?act=listCategory">Quản lý danh mục</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?act=listUsers">Quản lý khách hàng</a>
      </li>
    </ul>
    <?php } ?>
  </nav>
</div>
<div class="container">
  <h1 style="text-align: center;">Danh sách sản phẩm</h1>
  <a href="index.php?act=addsp" title="">
    <button class="btn btn-success" type="submit">Thêm sản phẩm</button>
  </a>
  <table class="table table-striped table-dark table-listcate">
    <thead>
      <tr class="bg-primary">
        <th style="width: 2%"></th>
        <th style="width: 3%">STT</th>
        <th style="width: 20%">Tên sản phẩm</th>
        <th style="width: 15%">Ảnh sản phẩm</th>
        <th style="width: 5%">Giá bán</th>
        <th style="width: 12%">Người bán</th>
        <th style="width: 7%">Created_at</th>
        <th style="width: 7%">Updated_at</th>
        <th style="width: 12%">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($load__sanpham as $load) {
      extract($load);
      $format_price = number_format($price,0,',','.');
      $hinhpath = "../upload/".$thumbnail;
      if (is_file($hinhpath)) {
      $hinh = "<img src='".$hinhpath."' height = '190px' >";
      }
      else{
      $hinh = "<img src='".$thumbnail."' height = '190px' >";
      }
      $sql = 'SELECT fullname,avatar FROM users where id = '.$id_users;
      $row = pdo_query_one($sql);
      $hinhpath = "../upload/".$row['avatar'];
      if (is_file($hinhpath)) {
      $hinhuser =  $hinhpath;
      }
      else{
      $hinhuser = $row['avatar'];
      }
      echo '  <tr>
        <td scope="col"><input type="checkbox" name="" value=""></td>
        <td scope="col">'.(++$index).'</td>
        <td scope="col">'.$name.'</td>
        <td scope="col">'.$hinh.'</td>
        <td scope="col">'.$format_price.'VNĐ</td>
        <td scope="col"><img src="'.$hinhuser.'" alt="" style="width: 30px;border-radius: 50px;height: 30px;margin : 5px">'.$row['fullname'].'</td>
        <td scope="col">'.$created_at.'</td>
        <td scope="col">'.$updated_at.'</td>
        <td>
          <a href="index.php?act=suasp&id='.$id.'" title="">
            <button class="btn btn-warning" type="submit">Sửa</button>
          </a>
          <a href="index.php?act=deletesp&id='.$id.'" title="">
            <button class="btn btn-danger" type="submit">Xóa</button>
          </a>
        </td>
      </tr>';
      }
      ?>
    </tbody>
  </table>
  <div class="page">
    <ul class="pagination">
      <?php
      for ($i=1; $i <= $pages; $i++) {
      ?>
      <li class=""><a href="index.php?act=listProduct&trang=<?= $i ?>"><?php echo $i ?></a></li>
      <?php } ?>
    </ul>
  </div>
</div>