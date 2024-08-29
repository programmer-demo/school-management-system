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
                <li>Home</li><li>Student</li>
            </ol>
        </div>
        <div id="content" class="dataTables_wrapper form-inline dt-bootstrap no-footer ">

            <div class="row">
                <div class="col-xs-12 col-sm-6" style="padding-bottom: 5px">
                    <label class="" style="display: flex;">
                        <span class="input-group-addon" style="width: 10%">
                             <i class="glyphicon glyphicon-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="search" style="width: 40%">
                    </label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive card card-body">
                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                            <thead>
                            <tr>
                                <th data-hide="phone">ID</th>
                                <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
                                <th>Gender</th>
                                <th>Date_Of_Birth</th>
                                <th>Place_Of_Birth</th>
                                <th data-hide="phone,tablet">Image</th>
                                <th data-hide="phone,tablet">Status</th>
                                <th>Payment_ID</th>
                                <th>User_ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->date_of_birth}}</td>
                                    <td>{{$student->place_of_birth}}</td>
                                    <td>{{$student->image}}</td>
                                    <td>{{$student->status}}</td>
                                    <td>{{$student->payment_id}}</td>
                                    <td>{{$student->user_id}}</td>
                                    <td>
                                        @if ($student->is_active)
                                            <label class="badge badge-info" style="background-color:#196eec">
                                                active
                                            </label>
                                        @else
                                            <label class="badge badge-danger" style="background-color: red">
                                                inactive
                                            </label>
                                        @endif
                                    </td>
                                    <td>{{$student->created_at}}</td>
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
