@extends('admin.admin-dashboard')

@section('content')
<<<<<<< HEAD
<div class="content-body" style="min-height: 500px">
    <div class="container-fluid">
        <div class="card-header mb-3">
            <h4 class="card-title">Roles Show</h4>
        </div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
</div>
</div>
=======
    <div class="content-body" style="min-height: 500px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h4 class="card-title">({{ $role->name }}) - Permisson Show</h4>
                        </div>
                        <div class="card-body">
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <span class="badge badge-success my-1" style="text-transform: capitalize"> {{ str_replace('-',' - ',str_replace('_', ' ', $v->name)) }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')

>>>>>>> 9066209 (Hello)
@endsection
