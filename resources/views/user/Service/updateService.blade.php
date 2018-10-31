@extends('layouts.user_layout.user_design');
@Section('content')

<!--main-container-part-->
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Your Information</a> </div>
  <h1>Information Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Hospital and Embulance Service</h5>
        </div>
        <div class="widget-content nopadding">

          <form action="#" method="post" class="form-horizontal">{{csrf_field()}}

            <div class="control-group">
              <label class="control-label">Hospital Name</label>
              <div class="controls">
                <input type="text" name="name" id="name" class="span11" placeholder="Hospital Name" />
              </div>
            </div>
            <div class="control-group">
                <label class="control-label">Divison</label>
                <div class="controls"> 
                     <select style="width:200px" name="divison" id="divison" class="form-control input-lg dynamic" data-dependent="district">
                        <option value="">Select Divison</option>
                        @foreach($division as $div)
                          <option value="" > {{$div->name}} </option>
                        @endforeach
                        </select>
                </div>

              </div>
              <div class="control-group">
                <label class="control-label">District</label>
                <div class="controls"> 
                     <select style="width:200px" name="district" id="district" class="form-control input-lg dynamic" data-dependent="thana">
                     <option value="">Select District</option>    
                    </select>
                </div>

              </div>
              <div class="control-group">
                <label class="control-label">Thana</label>
                <div class="controls"> 
                     <select style="width:200px" name="thana" id="thana" class="form-control input-lg dynamic" >
                     <option value=""> Select Thana </option>
                        </select>
                </div>
              </div>
             
            <div class="control-group">
              <label class="control-label">Area</label>
              <div class="controls">
                <input type="text" name="area" id="area" class="span11" placeholder="Name" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"> Hospital Contact </label>
              <div class="controls">
                <input type="text" name="hp_contact" id="hp_contact" class="span11" placeholder="Your Contact Number "  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"> Embulance Contact </label>
              <div class="controls">
                <input type="text" name="emb_contact" id="emb_contact" class="span11" placeholder="Your Contact Number "  />
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>

          </form>
          
        </div>
      </div>
    
    </div>
  </div>
</div>

<!-- DropDown_Ajax -->

<script> 

    $(document).ready(function(){
        $('#divison').change(function(){
            var id = $('#divison').val();
            $.ajax({
                type: 'get',
                url: 'getdistric',
                data: {'id': id},
                success: function(result){
                    $('select[name="district"]').empty();
                    $.each(result, function(key, value){
                        $('select[name="district"]').append('<option value="'+ value['id'] +'">' + value['name'] + '</option>');
                    });
                    console.log(result);
                },
                error: function(error){
                    console.log(error);
                }
                
            });
        });
        $('#district').change(function(){
         //   alert("test");
              var id = $('#district').val();
               $.ajax({
               type: 'get',
               url: 'getthana',
               data: {'id': id},

               success: function(result){
              
               console.log(result);

                $('select[name="thana"]').empty();
                $.each(result, function(key, value){
                    $('select[name="thana"]').append('<option value="'+ value['id'] +'">' + value['name'] + '</option>');
                });
                console.log(result);
            },
            error: function(error){
                console.log(error);
            }
            
        });
    });
    });

</script>



@endsection;

<!--end-main-container-part-->
