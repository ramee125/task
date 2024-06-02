
@if($messege = Session ::get('success')){
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" ></button>
        <strong>{{$messege}}</strong>

    </div>
}
@endif

@if($messege = Session ::get('error')){
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" ></button>
        <strong>{{$messege}}</strong>

    </div>
}
@endif
@if($messege = Session ::get('warning')){
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" ></button>
        <strong>{{$messege}}</strong>

    </div>
}
@endif

@if($messege = Session ::get('info')){
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" >

        </button>
        <strong>{{$messege}}</strong>

    </div>
}
@endif

