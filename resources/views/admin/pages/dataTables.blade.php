@extends('admin.admin_master')
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('admin/assets/plugin/datatables/css/datatables.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/plugin/datatables/css/dataTables.bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/plugin/datatables/Buttons/css/buttons.dataTables.min.css')}}" type="text/css" />
@endsection
@section('content')
    <div class="bst-content-wrapper">
        <div class="bst-content">
            <div class="data-table-style">
                <div class="bst-block pos-relative">
                    <div class="bst-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3 class="text-capitalize">Default</h3> </div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"> <a href="javascript:;" class="mrgn-l-xs" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"><i class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bst-block-content">
                        <div class="dataTables_wrapper">
                            <div class="table-responsive">
                                <table class="table table-hover dataTable" data-table="table-button" data-buttons="['copy', 'csv', 'excel', 'pdf', 'print']">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Join date</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Damon</td>
                                        <td>Sr.Officer</td>
                                        <td>2012/03/13</td>
                                        <td>New York</td>
                                        <td>23</td>
                                        <td>2014/05/6</td>
                                        <td>$556,5</td>
                                    </tr>
                                    <tr>
                                        <td>Torrey</td>
                                        <td>Manager</td>
                                        <td>2012/05/24</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2014/05/6</td>
                                        <td>$4,553</td>
                                    </tr>
                                    <tr>
                                        <td>Becker</td>
                                        <td>Ast.Officer</td>
                                        <td>2014/04/5</td>
                                        <td>New York</td>
                                        <td>25</td>
                                        <td>2014/05/6</td>
                                        <td>$2,589</td>
                                    </tr>
                                    <tr>
                                        <td>Yasmine</td>
                                        <td>Manager</td>
                                        <td>2012/03/23</td>
                                        <td>Yuba City</td>
                                        <td>30</td>
                                        <td>2014/05/6</td>
                                        <td>$5684</td>
                                    </tr>
                                    <tr>
                                        <td>Ada Hooper</td>
                                        <td>Ast.Officer</td>
                                        <td>2014/04/5</td>
                                        <td>New York</td>
                                        <td>25</td>
                                        <td>2014/05/6</td>
                                        <td>$2,589</td>
                                    </tr>
                                    <tr>
                                        <td>sammie</td>
                                        <td>Sr.Manager</td>
                                        <td>2012/01/9</td>
                                        <td>Florida</td>
                                        <td>25</td>
                                        <td>2014/05/6</td>
                                        <td>$5569</td>
                                    </tr>
                                    <tr>
                                        <td>Tarrance</td>
                                        <td>Manager</td>
                                        <td>2012/05/24</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2014/05/6</td>
                                        <td>$4,553</td>
                                    </tr>
                                    <tr>
                                        <td>Jerry</td>
                                        <td>Manager</td>
                                        <td>2012/05/24</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2014/05/6</td>
                                        <td>$4,553</td>
                                    </tr>
                                    <tr>
                                        <td>sammie</td>
                                        <td>Sr.Manager</td>
                                        <td>2012/01/9</td>
                                        <td>Florida</td>
                                        <td>25</td>
                                        <td>2014/05/6</td>
                                        <td>$5569</td>
                                    </tr>
                                    <tr>
                                        <td>Damon</td>
                                        <td>Sr.Officer</td>
                                        <td>2012/03/13</td>
                                        <td>New York</td>
                                        <td>23</td>
                                        <td>2014/05/6</td>
                                        <td>$556,5</td>
                                    </tr>
                                    <tr>
                                        <td>Lisa</td>
                                        <td>Manager</td>
                                        <td>2012/05/24</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2014/05/6</td>
                                        <td>$4,553</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection




@section('scripts')
    <script src="{{asset('admin/assets/plugin/jquery/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/matchmedia/matchMedia.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/matchmedia/matchMedia.addListener.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/countUp/countUp.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/countdown/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/js/datatable.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('admin/assets/plugin/scrollspy/scrollspy.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/charts.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/main.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/Buttons/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/ColReorder/dataTables.colReorder.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/datatables/RowReorder/dataTables.rowReorder.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/data-tables.js')}}" type="text/javascript"></script>
@endsection
