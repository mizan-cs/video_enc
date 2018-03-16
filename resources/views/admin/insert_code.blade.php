

<div class="row">
    <div class="col-sm-12">
    <div class="panel panel-bd lobidrag">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Insert Video Code</h4>
            </div>
        </div>
        <div style="text-align: center;" class="panel-body">
            <form style="text-align: center;" method="post" action="/insert_video_code" class="form-inline">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName2">Code</label>
                    <input class="form-control" name="code" id="insert_code" placeholder="*************" type="text">
                </div>
                <button type="submit" class="btn btn-success">Insert</button>
            </form>
        </div>
    </div>


    </div>
</div>
