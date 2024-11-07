
@extends('layouts.main')
@section('content')
    <div id="main" role="main">

        <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

            <ol class="breadcrumb">
                <li>Dashboard</li><li>Subject</li>
            </ol>
        </div>
        <div id="content" class="dataTables_wrapper form-inline dt-bootstrap no-footer ">

            <div class="row">
                <div id="task-bar-search" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 5px;">
                    <div class="" style="display: flex;justify-content:space-between;align-item:center;width:100% !importent">
                        <div class="col-8" style="display:flex">
                            <span class="input-group-addon" id="icon-search" style="width: 50px">
                                <i class="glyphicon glyphicon-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="search" id="input-search" style="width: 100% !importent">
                        </div>
                         <div class="col-4">
                        {{--  create button --}}
                            <span id="btn" class="">
                                <a href="{{url('form-add')}}"> <button type="button" class="btn btn-success"><i class="fa fa-plus" style="margin-right: 10px;"></i>Add </button></a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive card card-body">
                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                            <thead>
                            <tr>
                                <th data-hide="phone">ID</th>
                                <th data-class="expand"><i class="bi bi-book"></i> Name</th>
                                <th><i class="bi bi-calendar3"></i> Level</th>
                                <th><i class="bi bi-people"></i> Status</th>
                                <th><i class="bi bi-clock-history"></i> Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <td>{{$subject->id}}</td>
                                    <td>{{$subject->name}}</td>
                                    <td>{{$subject->level}}</td>
                                    <td>{{$subject->status}}</td>
                                    <td>
                                        @if($subject->status)
                                            <label class="badge badge-info" style="background-color:#196eec">
                                                active
                                            </label>
                                        @else
                                            <label class="badge badge-danger" style="background-color: red">
                                                inactive
                                            </label>
                                        @endif
                                    </td>
                                    <td>{{$subject->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>

                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection
