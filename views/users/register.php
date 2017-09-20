<div class="panel panel-default" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading">
        <h3>Register</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="name" name="name" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="email" name="email" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="password" name="password" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <input type="submit" class="btn btn-primary" name="submit" value="Register"/>
                </div>
            </div>
        </form>
    </div>
</div>