	<!-- Contact Form JavaScript -->
	<script src="./dist/js/jqBootstrapValidation.js"></script>
	<script src="./_controller/check-login.js"></script>
    <script src="./_controller/login.js"></script>


<div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                          <span class="glyphicon glyphicon-off"></span>
                        Sign In (KBANKNET)
                        </h3>
                    </div>
                    <div class="panel-body" style="padding:20px 40px 20px;">
                        <form accept-charset="UTF-8" role="form" class="form-signin"  id="loginForm"  novalidate autocomplete="off">
                            <fieldset>
                              <br />
                                <div class="form-group">
                                <div class="control-group">
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span></span>
                                        <input class="FirstUpperCase form-control FirstUpperCase" placeholder="Username" id="username" type="text" required data-validation-required-message="กรุณากรอก Username" autofocus/>
                                  </div>
                                  <p class="help-block text-danger"></p>
                                </div>
                                </div>

                                <br />

                                <div class="form-group">
                                <div class="control-group">
                                  <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input class="form-control" placeholder="Password" id="password" type="password" required data-validation-required-message="กรุณากรอก Password" />
                                  </div> 
                                  <p class="help-block text-danger"></p>
                                  </div>

                                </div>
                                <div id="success"></div>
                                <br />
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                              -->
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <button class="btn btn-md btn-success" id="btnSubmit"><span class="glyphicon glyphicon-ok"></span> Login</button>
                                <button type="button" class="btn btn-md btn-warning" id="btnClear" formnovalidate><span class="glyphicon glyphicon-ban-circle"></span> Clear</button>

                                <p style="color: gray; float: right; font-size: xx-small; margin-top: 15px;" class="ng-binding">Version 0.1.0.0
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>