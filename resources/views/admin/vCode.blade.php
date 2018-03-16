

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>All The video Access Code</h4>
                </div>
            </div>
            <div class="panel-body">
                
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>code</th>
                                <th>Access</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td>{{$video->id}}</td>
                                    <td>{{$video->code}}</td>
                                    <td>{{$video->access}}</td>
                                    <td>{{$video->created_at}}</td>
                                    <td>{{$video->updated_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
