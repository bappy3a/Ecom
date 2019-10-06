@extends('admin.admin_master')
@section('content')
<div class="bst-content-wrapper">
<div class="bst-content">
<div class="form-validation-style">
<div class="bst-block">
<div class="bst-block-title mrgn-b-lg">
<h3>Basic Validation</h3>
</div>
<div class="bst-block-content">
<form action="javascript:;" id="bst_demo_form1" class="form-horizontal">
<div class="form-body">
<div class="alert alert-danger display-hide">
<button class="close" data-close="alert"></button> You have some form errors. Please check below.
</div>
<div class="alert alert-success display-hide">
<button class="close" data-close="alert"></button> Your form validation is successful!
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Name <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<input type="text" name="name" data-required="1" class="form-control" /> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Email <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<input name="email" type="text" class="form-control" /> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">URL <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<input name="url" type="text" class="form-control" /> <span class="help-block"> e.g: http://www.demo.com or http://demo.com </span> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Number <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<input name="number" type="text" class="form-control" /> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Digits <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<input name="digits" type="text" class="form-control" /> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Credit Card </label>
<div class="col-md-6 col-sm-8 col-12">
<input name="creditcard" type="text" class="form-control" /> <span class="help-block"> e.g: 5500 0000 0000 0004 </span> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Occupation&nbsp;&nbsp;</label>
<div class="col-md-6 col-sm-8 col-12">
<input name="occupation" type="text" class="form-control" /> <span class="help-block"> optional field </span> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Select <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<select class="form-control" name="select">
<option value="">Select...</option>
<option value="Category 1">Category 1</option>
<option value="Category 2">Category 2</option>
<option value="Category 3">Category 5</option>
<option value="Category 4">Category 4</option>
</select>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Multi Select <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<select class="form-control" name="select_multi" multiple>
<option value="Category 1">Category 1</option>
<option value="Category 2">Category 2</option>
<option value="Category 3">Category 3</option>
<option value="Category 4">Category 4</option>
<option value="Category 5">Category 5</option>
</select> <span class="help-block"> select max 3 options, min 1 option </span> </div>
</div>
<div class="form-group">
<label class="control-label col-md-4 col-sm-4 col-12">Input Group <span class="required"> * </span> </label>
<div class="col-md-6 col-sm-8 col-12">
<div class="input-group"> <span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
<input type="text" class="form-control" name="input_group" placeholder="Email Address"> </div>
</div>
</div>
</div>
<div class="form-actions">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<button type="submit" class="btn btn-success">Submit</button>
<button type="button" class="btn btn-inverse btn-outline">Cancel</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('admin/assets/plugin/jquery/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/tether/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/scrollspy/scrollspy.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/countUp/countUp.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/countdown/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/jquery-validation/jquery.validate.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/matchmedia/matchMedia.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugin/matchmedia/matchMedia.addListener.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/form-validation.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/element.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/charts.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/main.js')}}" type="text/javascript"></script>
@endsection


