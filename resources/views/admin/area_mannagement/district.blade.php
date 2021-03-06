@extends('layouts.user_layout.user_design');
@Section('content')

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{URL::to('/user/dashbord')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="">Area Mannagement</a> 
    </div>
      <h1>Mannagement</h1>
        <div class="container-fluid">
            <p>Admin Massage For User</p>
        </div>
      <hr>   
</div>
@if ($message = Session::get('flash_message_success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
      <strong >{{ $message }}</strong>
  </div>
@endif


@if ($message = Session::get('flash_message_error'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
      <strong>{{ $message }}</strong>      
  </div>
@endif
        
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
          <h5>Add District Name</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="frm" action="{{URL::to('/admin/add-district')}}" method="post" class="form-horizontal">  {{csrf_field()}}
          <div class="control-group">
                <label class="control-label">Divison</label>
                <div class="controls"> 
                    <select style="width:200px" name="divison" id="divison" class="form-control input-lg dynamic" data-dependent="district Name" required>
                        <option value="">Select Divison</option>
                        @foreach ($divison as $id) 
                          <option value="{{$id->id}}">{{$id->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div> 

            <div class="control-group">
              <label class="control-label"> District </label>
              <div class="controls">
                <input type="text" name="district" id="district" class="span11" placeholder="District Name"  required />
              </div>
            </div>
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>

          </form>
          
        </div>
      </div>
    
    </div>
  </div>
</div>
  


@endsection;

<!--end-main-container-part-->