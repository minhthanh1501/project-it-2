<div class="banner-black"></div>
<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 class="text-center">Update người dùng</h2>
    </div>
    <?php 
      if (is_array($load__nguoidung__update)) {
        extract($load__nguoidung__update);
      }
     ?>
    <form class="panel-body" method="POST" action="index.php?act=updatend">
      <div class="form-group">
        <input type="hidden" name="idUser" value="<?=(isset($id) && $id > 0)? $id:"" ?>">
        <label for="usr">Tên người dùng:</label>
        <input name="nameUser" type="text" class="form-control bg-info bg-gradient" id="usr" value="<?=(isset($fullname) && $fullname != "")? $fullname:"" ?>">
        <label for="tp">Vai trò:</label>
        <select name="roleUser" style="outline: none;">
          <option value="<?=(isset($role) && $role != "")? $role:"" ?>"><?=(isset($role) && $role != "")? $role:"" ?></option>
          <option value="customer">customer</option>
          <option value="admin">Admin</option>
          <option value="seller">Seller</option>
        </select>
        <!-- <input name="roleUser" type="text" class="form-control bg-info bg-gradient" id="tp" value="<?=(isset($role) && $role != "")? $role:"" ?>"> -->
      </div>
      <input type="submit" class="btn btn-success" style="margin-top: 10px" name="capnhat" value="Lưu"></input>
      <p><?= (isset($thongbao['mes']))? $thongbao['mes']:"" ?></p>
    </form>
  </div>
  <a href="index.php?act=listUsers" title=""><button class="btn btn-warning">Quay về danh sách người dùng</button></a>
</div>