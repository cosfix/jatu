@extends('layouts.app')
@section('content')



<form class="form-horizontal" action="{{route('uamuzi.store')}}" method="POST">
@csrf
<fieldset>

<!-- Form Name -->
<legend>Fomu Ya Uamuzi wa Kamati</legend>

<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label" for="text">Riba kwa asilimia</label>  
  <div class="col-md-4">
  <input id="text" name="interest" type="text" placeholder="Mfano 0.2%=" class="form-control input-md" required="">
 
  </div>
</div>
 <div class="form-group">
	 
    <label for="description">Maelezo ya Mkopo</label>
      <div class="col-md-4">
    <textarea class="form-control" id="description" rows="3" name="description" placeholder="Mfano Ombi limekataliwa"></textarea>
  </div>

</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Uthibitisho</label>  
  <div class="col-md-4">
  <input id="text" name="status" type="text" placeholder="Mfano Akiba" class="form-control input-md" required="Akiba">
 
  </div>
</div>
<!-- <label><b>B. MAOMBI YA MKOPO</b></label> -->
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Jina la Mwenyekiti</label>  
  <div class="col-md-4">
  <input id="text" name="chair" type="text"  class="form-control input-md" required="">
 
  </div>

<div class="form-group">
  <label class="col-md-4 control-label" for="text">Jina la Katibu</label>  
  <div class="col-md-4">
  <input id="text" name="secretary" type="text"  class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Jina la Mjumbe</label>  
  <div class="col-md-4">
  <input id="text" name="messenger" type="text"  class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Jina la Afisa Mikopo</label>  
  <div class="col-md-4">
  <input id="text" name="loan_officer" type="text" placeholder="Mfano Mjasiliamali" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Tarehe Aliyopata Mkopo</label>  
  <div class="col-md-4">
  <input id="text" name="receive_date" type="date" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Tarehe Kuanza Malipo</label>  
  <div class="col-md-4">
  <input id="text" name="start_day" type="date" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Tarehe ya Kumaliza Malipo</label>  
  <div class="col-md-4">
  <input id="text" name="end_day" type="date"  class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Riba kwa Mwezi</label>  
  <div class="col-md-4">
  <input id="text" name="month_interest" type="text"  class="form-control input-md" required="">
 
  </div>
</div>




<!-- Button (Double) -->
<div class="form-group">

  <div class="col-md-8">
   <input type="submit" name="submit" class="btn btn-primary ">
  </div>
</div>

</fieldset>
</form>


@endsection