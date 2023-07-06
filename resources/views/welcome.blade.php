<!-- <!DOCTYPE html>
<html>
<head>
    <title>List Template</title>
    <link href="{{ asset('css/list.css') }}" rel="stylesheet">
</head>
<body>
    <h1>List Template</h1>

    <div class="col-lg-12 text-right">
               <a href="{{url('/posts/create')}}" class="btn btn-outline-primary support-form-btn btn-lg text-danger "><i  aria-hidden="true"></i> Add Post</a>
            </div>

            <div class="col-lg-12 text-right">
               <a href="{{url('/searchitem')}}" class="btn btn-outline-primary support-form-btn btn-lg text-danger "><i  aria-hidden="true"></i> search Post</a>
            </div>

    <ul>
    @foreach ($items as $item)
            <li>{{ $item['title'] }}</li>
            
        @endforeach
        
    </ul>
</body>
</html> -->


<style>
 .box-form-d{
            display: flex;
            justify-content: space-between;
            position: relative;
            top: 10px;
          
         }
   
    .til-input-b{
        font-family: Roboto;
    font-size: 20px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0rem;
    color: var(--paragraph);
    border: 1px solid #337eb7;
    padding: 16px 0px !important;
    }
    .til-input-b::placeholder{
        padding-left: 20px;
        font-size: 20px;
    }
    .custom-cate{
        width: 100% !important;
    }
   

    .custom-cate {
    width: 100% !important;
    height: 58px;
    color: #6c757d !important;
    font-size: 20px;
    font-weight: 500;

    border: 1px solid #337eb7;
}
    .acti-form{
        margin-top: 20px;
    }
    .til-input-ab{
        min-height: 50px !important;
        border: 1px solid #337eb7;
    }
    #co-head-label{
        font-family: Roboto;
    font-size: 20px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0rem;
    color: var(--paragraph);
    }
    .mod-p-c{
        font-family: Roboto;
    font-size: 20px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0rem;
    color: var(--paragraph);
    }

    .select-options li:hover, .select-options li.is-selected {
    color: var(--paragraph);;
    background: #fff;
    border: 1px solid #337eb7 !important;
}
.til-input-t{
    font-family: Roboto;
    font-size: 20px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0rem;
    color: var(--paragraph);
    border: 1px solid #337eb7;
    padding: 16px 20px !important;  
}
.add-album-modal{
   max-width: 1000px !important;
}
 
</style>


  <!-- ----------------table-start----------------- -->
  <div class="container" id="mange-data">
     <div class="row mt-5">
         <div class="col-lg-6">
            <div class="heading-event1">
               <h1>{{__("My Applied Leaves")}}</h1> </div>
            </div>
            @csrf
            <div class="col-lg-12 text-right">
               <a href="{{url('/posts/create')}}" class="btn btn-outline-primary support-form-btn btn-lg text-danger "><i  aria-hidden="true"></i> Add Post</a>
            </div>

            <div class="col-lg-12 text-right">
               <a href="{{url('/searchitem')}}" class="btn btn-outline-primary support-form-btn btn-lg text-danger "><i  aria-hidden="true"></i> search Post</a>
            </div>
            
        
      </div>
     
      <div class="row mb-5">
         <div class="col-lg-12  text-end">
            <div class="table-responsive">
              <form method="post">
                <table id="property-list" class="table table-bordered tbl  text-center">
                  <thead>
                    <tr class="table-style_g">
                      <th scope="col">S.No.</th>
                      <th>{{ __('Action')}}</th>
                      <th>{{ __('Title')}}</th>


                      
                    </tr>

             
                    @forelse($items as $key => $faq)
                    

                    
                   
                    <tr class="tables-data-style">
                     <td>
                     {{$key +1}}
                     </td>

                     <td>

                     <div class="col-lg-24 text-right">
               <a href="{{route('update', $faq->id)}}" class="btn btn-outline-primary support-form-btn btn-lg text-danger "><i  aria-hidden="true"></i> Update </a>
            </div>

            <div class="col-lg-24 text-right">
               <a href="{{route('delete',$faq->id )}}" class="btn btn-outline-primary support-form-btn btn-lg text-danger "><i  aria-hidden="true"></i> Delete</a>
            </div>

                    
                     <a href="" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                         <i class="fa fa-edit" aria-hidden="true"></i>
                         </a>
                         <a href="" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                       <i class="fa fa-trash" onclick="return confirm('Are you sure you want to delete?')" aria-hidden="true"></i>
                         </a>
                      
                       

                       <a href="" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                         <i class="fa fa-eye" aria-hidden="true"></i>
                         </a>
                     
                       
                       
                     </td>
                     
                     <td>{{$faq->title}}</td>
                   
                    
                   
                     
                   </tr>
                   @empty
                 
              
                   <tr>
                                <td colspan="5" class="text-center">{{__('No data found!')}}</td>
                            </tr>
                  
                                  
                            @endforelse         
                  </thead>
                   
                  <tbody>
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
               



</div>
              </form>
            </div>
          </div>
      </div>
    </div>
    