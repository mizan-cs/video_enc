
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Current Live Video Url</h4>
                </div>
            </div>
            <div class="panel-body">
                <form method="post" action="/live_update">
                    @csrf
                    <textarea name="live_url" data-provide="markdown" rows="5">
                        {{$live->live_url}}
                    </textarea>
                    <hr/>
                    <button type="submit" class="btn btn-success">Update</button>
                </form> 
            </div>
        </div>
    </div>
</div>
