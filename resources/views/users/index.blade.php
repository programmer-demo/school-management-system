<<<<<<< HEAD
<style>
    #task-bar-search{
        background-color: red;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.5rem;
        width: 100%;
        height: 50px;
    }
    #btn{
        margin-left: 50%;    
        transition: all .2s ease;  
    }
    #search{
        background-color: blue;
        width: 30%;
    }
    #icon-search{
        width: 3%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        text-justify: center;
        margin-left: 7px;

    }
    #btn:hover{
        box-shadow: 0px 0px 8px 2px rgb(86, 171, 127);
    
    }
</style>
{{-- ======================================================================================= --}}
=======

>>>>>>> 8097a2849fa4c0aa58de195528ccc759f2d4d3ed
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
                <li>Home</li><li>User</li>
            </ol>
        </div>
        <div id="content" class="dataTables_wrapper form-inline dt-bootstrap no-footer ">

            <div class="row">
<<<<<<< HEAD
                {{-- ==========================================New taskbar========================================== --}}
                <div id="task-bar-search">
                    <span  id="icon-search" >
                         <i class="glyphicon glyphicon-search" style="height: 80%; width:100%; font-size:35px;"></i>
                    </span>
                    <span id="search">
                        <input type="text" placeholder="search" id="input-search" style="height: 80%; width:100%;">
                    </span>
                    {{-- create button --}}
                    <span id="btn" >
                        <button type="button" class="btn btn-success" style="height:80%; width:100%;">Add</button>
                    </span>
=======
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
                                <button type="button" class="btn btn-success">Add</button>
                            </span>
                        </div>
                    </div>
>>>>>>> 8097a2849fa4c0aa58de195528ccc759f2d4d3ed
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive card card-body">
                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                            <thead>
                            <tr>
                                <th data-hide="phone">ID</th>
                                <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
                                <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
                                <th>Gender</th>
                                <th>Position</th>
                                {{--                                <th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>--}}
                                <th data-hide="phone,tablet">Status</th>
                                <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->gender}}</td>
                                    {{--                                        <td>35728</td>--}}
                                    <td>{{$user->position}}</td>
                                    <td>
                                        @if ($user->is_active)
                                            <label class="badge badge-info" style="background-color:#196eec">
                                                active
                                            </label>
                                        @else
                                            <label class="badge badge-danger" style="background-color: red">
                                                inactive
                                            </label>
                                        @endif
                                    </td>
                                    <td>{{$user->created_at}}</td>
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
