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
                        <form role="form">
                            <fieldset>
                              <br />
                                <div class="form-group">

                                  <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span></span>
                                        <input id="userTag" name="username" type="text" required="true" class="form-control" required data-validation-required-message="Please enter UserName." placeholder="Username" maxlength="50" focus="true" autofocus>
                                  </div>

                                </div>

                                <br />

                                <div class="form-group">

                                  <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input id="password" name="password" type="password" required="true" ng-model="user.password" class="form-control" required data-validation-required-message="Please enter Password." placeholder="Password" maxlength="50">
                                  </div>

                                </div>

                                <br />
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                              -->
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <button class="btn btn-md btn-success"><span class="glyphicon glyphicon-ok"></span> Login</button>
                                <button class="btn btn-md btn-warning"><span class="glyphicon glyphicon-ban-circle"></span> Clear</button>

                                <p style="color: gray; float: right; font-size: xx-small; margin-top: 15px;" class="ng-binding">Version 0.1.0.0
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
