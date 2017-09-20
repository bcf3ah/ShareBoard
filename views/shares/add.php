<div class="panel panel-default" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading">
        <h3>Share</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Title</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="title" name="title"/>
                </div>
            </div>
            <div class="form-group">
                <label for="body" class="col-lg-2 control-label">Body</label>
                <div class="col-lg-10">
                    <textarea class="form-control" id="body" name="body"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="link" class="col-lg-2 control-label">Link</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="link" name="link"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Share"/>
                </div>
            </div>
        </form>
    </div>
</div>