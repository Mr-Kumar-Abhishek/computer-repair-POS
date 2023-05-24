  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->


      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3>Add users</h3>
          <div class="card-tools">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add-user">
              Add User
            </bottom> 
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
            <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Photo</th>
                    <th>profile</th>
                    <th>Status</th>
                    <th>Last Login</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Admin</td>
                      <td>admin</td>
                      <td></td>
                      <td>Administrator</td>
                      <td><button class="btn btn-success btn-xs">Activated</button></td>
                      <td>24-05-2023</td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-warning" ><i class="fas fa-pencil"></i> edit </button> 
                          <button class="btn btn-danger"><i class="fas fa-times"></i> delete </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Admin</td>
                      <td>admin</td>
                      <td></td>
                      <td>Administrator</td>
                      <td><button class="btn btn-success btn-xs">Activated</button></td>
                      <td>24-05-2023</td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-warning" ><i class="fas fa-pencil"></i> edit </button> 
                          <button class="btn btn-danger"><i class="fas fa-times"></i> delete </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Admin</td>
                      <td>admin</td>
                      <td></td>
                      <td>Administrator</td>
                      <td><button class="btn btn-danger btn-xs">Deactivated</button></td>
                      <td>24-05-2023</td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-warning" ><i class="fas fa-pencil"></i> edit </button> 
                          <button class="btn btn-danger"><i class="fas fa-times"></i> delete </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- add user model -->


  <div class="modal fade" id="modal-add-user">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->