<?php
 require('head_c.php');
  $_SESSION['menu']='product';
$data=$obj->get_wastage();
  ?>
<div class="wrapper">
  <?php
  require('leftMenu.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Wastage List
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="wastage.php">New Wastage</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body">
              <div class="col-xs-12 col-md-12">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Data</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($d=$data->fetch(PDO::FETCH_ASSOC)) {
                      $p=$obj->getData('products','id='.$d['productid'])->fetch(PDO::FETCH_ASSOC);
                      ?>
                    <tr>
                      <td><?php echo $p['name'] ?></td>
                      <td><?php echo $d['quantity'] ?></td>
                      <td><?php echo $d['total'] ?></td>
                      <td><?php echo $d['date'] ?></td>
                      <td>
                        <a href="wastage_edit.php?id=<?php echo $d['id']?>" class="btn btn-primary">Edit</a>
                        <a href="wastage_delete.php?id=<?php echo $d['id']?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              
              
            </div>
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php require('footer_c.php');?>
