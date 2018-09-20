<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="?">Harupt</a>
    </li>
    <li class="breadcrumb-item active">Master Users</li>
  </ol>
  <!-- Add User -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-user"></i>
      Add User
    </div>
    <div class="card-body">
      <form class="" action="" method="POST">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" class="form-control" placeholder="Username" name="username">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="access-level">Access Level</label> <br />
              <select class="form-control" id="access-level" name="level">
                <option selected disabled>----User Access Level----</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Password" name="password">
            </div>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="form-control btn btn-primary" name="add-user">Add User</button>
        </div>
      </form>
    </div>
  </div>

  <!-- List Users  -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      List Users
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Access Level</th>
              <th>Settings</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Access Level</th>
              <th>Settings</th>
            </tr>
          </tfoot>
          <tbody>
            <!-- List Here -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
