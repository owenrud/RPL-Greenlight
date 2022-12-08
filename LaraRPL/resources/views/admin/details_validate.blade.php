@extends('admin.layouts.main')

@section('content')
<div class="row">
<div class="row text-center">
<div class="col">
<img src={{ "owen.jpg" }}>
</div>

</div>
<div class="text-center">
<div class="row">
<div class="col">   
                                      
                                      <form method="POST" action="/details_validate/accept">
                                      @csrf
                                      <input name ="id" type="hidden" value={{$invoice->id}}>
                                      <input name="status" type="hidden" value="1">
                                        <button type="submit" class="btn btn-outline-info">
                                          Accept 
                                        </button>
                                        </form>
                                        <button type="button" class="btn btn-outline-info">
                                        <a class="dropdown-item" href="/details_validate/reject" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menolak pesanan ini?')" style="word-spacing:32.5px">
                                          Reject <i class="bi bi-trash"></i>
                                        </a>
                                        </button>
                                      </div>
                                      </div>
                                      </div>
                                      </div>
@endsection