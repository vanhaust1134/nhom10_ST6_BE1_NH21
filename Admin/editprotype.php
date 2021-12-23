<?php include "header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Protype</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Protype</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
    if(isset($_GET['id'])):
    $type_id = $_GET['id'];
    $getProtypesById = $protype->getProtypesById($type_id);
    foreach ($getProtypesById as $values) :
    ?>
    <section class="content">
        <form action="edit3.php?type_id=<?php echo $values['type_id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">type_id</label>
                                <input type="text" id="inputName" class="form-control" name="type_id" value="<?php echo $values['type_id'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputName">type_name</label>
                                <input type="text" id="inputName" class="form-control" name="type_name" value="<?php echo $values['type_name'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" name="submit" value="Edit Protype" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <?php endforeach;endif ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html" ?>
