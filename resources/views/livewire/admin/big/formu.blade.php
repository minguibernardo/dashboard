<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advanced Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content life-mr1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                          <h3 class="card-title">Advance Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <form wire:submit.prevent="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Qualificação</label>
                                      <input type="text" name="Qualificacao" class="form-control" placeholder="Enter ...">
                                    </div>
                                  </div>
                              <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Percentages/Mark</label>
                                  <input type="text" name="percent" class="form-control" placeholder="Enter ...">
                                </div>
                              </div>
                              <div class="col-md-6"><!--disabled=""-->
                                <div class="form-group">
                                  <label>Ano</label>
                                  <input type="text" name="ano" class="form-control" placeholder="Enter ..." >
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                  <label>Pais</label>
                                  <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Select Disabled</label>
                                  <select class="form-control" disabled="">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-1 m-1">
                                    <a class="btn btn-primary btn-lg">Add</a>
                                    <button type="submit"class="btn btn-dark btn-lg">Submit</button>
                                </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
