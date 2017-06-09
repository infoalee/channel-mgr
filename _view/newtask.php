
<script src="./dist/js/jqBootstrapValidation.js"></script>
<script src="./_controller/newtask.js"></script>
<script src="./_controller/newtask1.js"></script>
<!-- /#page-wrapper -->
<div id="page-wrapper">

          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Booking</h1>
              </div>
              <!-- /.col-lg-30 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          กรอกรายละเอียด
                      </div>
                      <div class="panel-body">
                          <div class="row">

                              <div class="col-lg-12">
                                  <form accept-charset="UTF-8" role="form" class="form-signin"  id="newtaskForm"  novalidate autocomplete="off">

                                    <div class="row">
                                      <div class="form-group">
                                        <div class="col-md-1 col-lg-2">
                                        </div>
                                          <div class="col-md-3 col-lg-2">
                                            <label class="control-label inline">Campaign Code :</label>
                                          </div>
                                          <div class="col-md-3 col-lg-2 text-left">
                                            <input class="form-control inline UpperCase" id="campaigncode" placeholder="Code." maxlength="9"  required data-validation-required-message="Please enter to Search"  size="9" style="max-width:150px;">
                                            <p class="help-block"></p>
                                          </div>
                                          <div class="col-md-1 col-lg-2 text-left control">
                                            <button class="btn btn-sm btn-info" id="btnCampaingChk"><span class="fa fa-check-square-o"></span> Check!</button>
                                          </div>
                                          <div class="col-md-3 col-lg-1 s-control">
                                            <label class="control-label inline">Type :</label>
                                          </div>
                                          <div class="col-md-2 col-lg-2 text-left s-control">
                                            <select name="select" id="select" class="form-control selectpicker inline">
                                              <option>Targeted</option>
                                              <option>Informative</option>
                                              <option>Informative CRM</option>
                                              <option>Service Campaign</option>
                                              <option>Other</option>
                                            </select>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row s-control">
                                      <div class="form-group">
                                        <div class="col-md-1 col-lg-2">
                                        </div>
                                          <div class="col-md-3 col-lg-2">
                                            <label class="control-label inline">Campaign Name :</label>
                                          </div>
                                          <div class="col-md-3 col-lg-6 text-left">
                                            <input class="form-control inline" id="campaignName" placeholder="Campaign Name." maxlength="100"  required data-validation-required-message="Please enter to Search">
                                            <p class="help-block"></p>
                                          </div>

                                      </div>
                                    </div>

                                    <div class="row s-control">
                                      <div class="form-group">
                                        <div class="col-md-1 col-lg-2">
                                        </div>
                                          <div class="col-md-3 col-lg-2">
                                            <label class="control-label inline">Product :</label>
                                          </div>
                                          <div class="col-md-3 col-lg-3">
                                            <select id="slProduct" class="form-control selectpicker inline">
                                              <option value="BA">BA</option>
                                              <option value="CC">CC</option>
                                              <option value="DF">DF</option>
                                              <option value="MF">MF</option>
                                              <option value="PL">PL</option>
                                              <option value="KEC">KEC</option>
                                              <option>Other..</option>
                                            </select>
                                            <p class="help-block"></p>
                                          </div>
                                      </div>
                                     </div>

                                      <div class="row s-control">
                                        <div class="form-group">
                                          <div class="col-md-1 col-lg-2">
                                          </div>
                                            <div class="col-md-3 col-lg-2">
                                              <label class="control-label inline">Objective :</label>
                                            </div>
                                            <div class="col-md-6 col-lg-6 text-left">
                                              <input class="form-control inline" id="campaignObj" placeholder="Objective."  required data-validation-required-message="Please enter to Search">
                                              <p class="help-block"></p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="row s-control">
                                        <div class="form-group">
                                          <div class="col-md-1">
                                          </div>
                                            <div class="col-md-3">
                                              <label class="control-label inline">Customer Group :</label>
                                            </div>
                                            <div class="col-md-6 text-left">
                                              <textarea class="form-control inline" id="customerGroup" placeholder="Customer Group"  required data-validation-required-message="Please enter to Search"> </textarea>
                                              <p class="help-block"></p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="row s-control">
                                        <div class="form-group">
                                          <div class="col-md-1">
                                          </div>
                                            <div class="col-md-3">
                                              <label class="control-label inline">Campaign Periods :</label>
                                            </div>
                                              <label for="name" class="col-md-1 col-lg-1">From:</label>
                                                <div class="col-md-2 col-lg-2">
                                                    <input type="text" class="form-control" name="from-dt" id="from-dt">
                                                    <p class="help-block"></p>
                                                </div>
                                              
  
                                              <label for="name" class="col-md-1 col-lg-1">To:</label>
                                                <div class="col-md-2 col-lg-2">
                                                    <input type="text" class="form-control" name="to-dt" id="to-dt">
                                                    <p class="help-block"></p>
                                                </div>
                                        </div>
                                      </div>

                                       <div class="row s-control">
									                      <div class="form-group">
                                        <div class="col-md-1">
                                          </div>
                                          <div class="col-md-3">
                                            <label class="control-label inline">Contact Date  :</label>
                                          </div>
                                          <div class="col-md-3">
                                            <input id="cnt-dt" class="form-control inline" placeholder="Contact Date." />
                                            <p class="help-block"></p>
                                          </div>
                                      </div>
                                      </div>
                                      
									                    <div class="row s-control">
									                      <div class="form-group">
                                        <div class="col-md-1">
                                          </div>
                                          <div class="col-md-3">
                                            <label class="control-label inline">Amount :</label>
                                          </div>
                                          <div class="col-md-3">
                                            <input class="form-control inline">
                                            <p class="help-block"></p>
                                          </div>
                                        </div>
                                      </div>

									                    <div class="row s-control">
									                      <div class="form-group">
                                        <div class="col-md-1">
                                          </div>
                                          <div class="col-md-3">
                                            <label class="control-label inline" for="select">Channel  :</label>
                                          </div>
                                          <div class="col-md-3">
                                            <select name="select" id="select" class="form-control selectpicker inline">
                                              <option>SMS</option>
                                              <option>EDM</option>
                                              <option>KMB</option>
                                            </select>
                                            <p class="help-block"></p>
                                          </div>
                                          </div>
                                          </div>
                                      
                                      <div class="row s-control">
                                      <div class="form-group">
                                        <div class="col-md-1">
                                        </div>
										                    <div class="col-md-3">
                                            <label class="control-label inline">Type  :</label>
                                        </div>
                                          <div class="col-md-3">
                                            <select name="select" id="select" class="form-control selectpicker inline">
                                              <option>Normal (N)</option>
                                              <option>Personalize (P)</option>
                                            </select>
                                            <p class="help-block"></p>
                                          </div>
                                      </div>
                                      </div>

                                       <div class="row s-control">
                                        <div class="form-group">
                                          <div class="col-md-1">
                                          </div>
                                            <div class="col-md-3">
                                              <label class="control-label inline">Remarks :</label>
                                            </div>
                                            <div class="col-md-6 text-left">
                                              <textarea class="form-control inline" id="remarks" placeholder="Remarks."  required data-validation-required-message="Please enter to Search"> </textarea>
                                              <p class="help-block"></p>
                                            </div>
                                        </div>
                                      </div>
                                     

                                      </div>
                                    
                                    <div class="row s-control">
                                      <div class="form-group">
                                        <div class="col-lg-12 text-center">
                                          <button class="btn btn-md btn-success" id="btnSubmit" type="submit"><span class="X glyphicon glyphicon-book"></span> Booking</button>
                                          <button class="btn btn-md btn-warning" id="btnClear"><span class="glyphicon glyphicon-ban-circle"></span> Clear</button>
                                        </div>
                                    </div>
                                  </div>
                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->

              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->
