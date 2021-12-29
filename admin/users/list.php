<div class="banner-black"></div>
<div class="container">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <?php
    if ($_SESSION['user']['role'] == 'seller') {
    ?>
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
      </li>
    </ul>
    <?php }else if ($_SESSION['user']['role'] == 'admin') {
    ?>
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php?act=listCategory">Quản lý danh mục</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?act=listUsers">Quản lý khách hàng</a>
      </li>
    </ul>
    <?php } ?>
  </nav>
</div>
<div class="container">
    <h1 style="text-align: center;">Danh sách người dùng</h1>  
    <table class="table table-striped table-dark table-listcate">
        <thead>
            <tr class="bg-primary">
                <th style="width: 5%"></th>
                <th style="width: 5%">STT</th>
                <th style="width: 25%">Tên khách hàng</th>
                <th style="width: 15%">SĐT</th>
                <th style="width: 15%">Email</th>
                <th style="width: 15%">Vai trò</th>
                <th style="width: 20%">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($load__nguoidung as $load) {
                    extract($load);
                    $hinhpath = "../upload/".$avatar;
                    if (is_file($hinhpath)) {
                      $hinh = $hinhpath;
                    }
                    else{
                      $hinh = $avatar;
                    }
                    echo '  <tr>
                              <td scope="col"><input type="checkbox" name="" value=""></td>
                              <td scope="col">'.(++$index).'</td>
                              <td scope="col"><img src="'.$hinh.'" alt="" style="width: 30px;border-radius: 50px;height: 30px;margin : 5px">'.$fullname.'</td>
                              <td scope="col">'.$tel.'</td>
                              <td scope="col">'.$email.'</td>
                              <td scope="col">'.$role.'</td>
                              <td>
                                 <a href="index.php?act=suand&id='.$id.'" title="">
                                    <button class="btn btn-warning" type="submit">Sửa</button>
                                 </a>
                                 <a href="index.php?act=deletend&id='.$id.'" title="">
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
          <li class=""><a href="index.php?act=listCategory&trang=<?= $i ?>"><?php echo $i ?></a></li>
          <?php } ?>
        </ul>
      </div>
</div>
