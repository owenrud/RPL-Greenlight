@extends('admin.layouts.main')

@section('content')

<div class="row text-center">
<div class="col">
<img style="width:300px;height:500px;"src={{ '../invoice-images/'.$invoice->file }}>
</div>

</div>
<div style="padding:5% 15% 20% 40%;"class="container">
<div class="row">

                                      
                                      <form method="POST" action="/details_validate/accept">
                                      @csrf
                                      <input name ="id" type="hidden" value={{$invoice->id}}>
                                      <input name="status" type="hidden" value="1">
                                        <button type="submit" class="btn btn-outline-success">
                                          Accept 
                                        </button>
                                        </form>
                                        
                                       
                                         <form method="GET" action="/validate/reject/{{$invoice->id}}">
                                      @csrf
                                      
                                        <button type="submit" class="btn btn-outline-danger">
                                          Reject
                                        </button>
                                        </form>
                                        </div>
                                        
                                      
                                      </div>
                                      
                                      
@endsection