
      <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Mahasiswa</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Data Mahasiswa</a>
                </li>
              </ul>
            </div>           
           <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                    <h4 class="card-title">Daftar Mahasiswa</h4>
                        <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Tambah Data
                      </button>
                  </div>
                  
                  <div class="card-body">
                                        <!-- Modal -->
                    <div
                      class="modal fade"
                      id="addRowModal"
                      tabindex="-1"
                      role="dialog"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header border-0">
                            <h5 class="modal-title">
                              <span class="fw-mediumbold"> Tambah</span>
                              <span class="fw-light"> Data Mahasiswa </span>
                            </h5>
                            <button
                              type="button"
                              class="close"
                              data-dismiss="modal"
                              aria-label="Close"
                            >
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="small">
                              Create a new row using this form, make sure you
                              fill them all
                            </p>
                            <form>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Nim</label>
                                    <input
                                      name="nim"
                                      type="text"
                                      class="form-control"
                                      placeholder="Masukkan Nim"
                                    />
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Nama Lengkap</label>
                                    <input
                                      name="nama_lengkap"
                                      type="text"
                                      class="form-control"
                                      placeholder="masukkan nama lengkap"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>Prodi</label>
                                    <input
                                      name="prodi"
                                      type="text"
                                      class="form-control"
                                      placeholder="masukkan prodi"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-default">
                                    <label>Jurusan</label>
                                    <input
                                      name="jurusan"
                                      type="text"
                                      class="form-control"
                                      placeholder="mas"
                                    />
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer border-0">
                            <button
                              type="button"
                              name="=button"
                              class="btn btn-primary"
                            >
                              Add
                            </button>
                            <button
                              type="button"
                              name = "close"
                              class="btn btn-danger"
                              data-dismiss="modal"
                            >
                              Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama Lengkap</th>
                            <th>Prodi</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama Lengkap</th>
                            <th>Prodi</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>E41241048</td>
                            <td>Sahril Sidik</td>
                            <td>Teknik Informatika</td>
                            <td>Teknologi Informatika</td>
                          <td>
                              <div class="form-button-action">
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-danger"
                                  data-original-title="Remove"
                                >
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
