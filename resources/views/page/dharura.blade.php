@extends('layouts.app')

@section('content')

<html>
<title>Dharura</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<form class="form-horizontal" action="{{url('emergency')}}" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Fomu Ya Mkopo Wa dharura</legend>

<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label" for="text">Akiba Chamani</label>  
  <div class="col-md-4">
  <input id="text" name="saving" type="text" placeholder="Mfano Tsh. !00,000/=" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Dhamana</label>  
  <div class="col-md-4">
  <input id="text" name="bond" type="text" placeholder="Mfano Akiba" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Jina la Mrithi</label>  
  <div class="col-md-4">
  <input id="text" name="successor_name" type="text" placeholder="" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Namba ya Simu ya Mrithi</label>  
  <div class="col-md-4">
  <input id="text" name="successor_phone" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Namba Ya Uanachama</label>  
  <div class="col-md-4">
  <input id="text" name="member_id" type="text" placeholder="AB 1111" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Aina ya Biashara</label>  
  <div class="col-md-4">
  <input id="text" name="business" type="text" placeholder="Mfano Mjasiliamali" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Mahali ilipo</label>  
  <div class="col-md-4">
  <input id="text" name="place" type="text" placeholder="Mfano Kinondoni" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Mapato kwa Siku</label>  
  <div class="col-md-4">
  <input id="text" name="day_income" type="text" placeholder="AB 1111" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Mapato Kwa Mwezi</label>  
  <div class="col-md-4">
  <input id="text" name="month_income" type="text" placeholder="AB 1111" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Kiasi cha Mkopo</label>  
  <div class="col-md-4">
  <input id="text" name="amount" type="text" placeholder="Mfano Tsh. !00,000/=" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Lengo la Mkopo</label>  
  <div class="col-md-4">
  <input id="text" name="reason" type="text" placeholder="AB 1111" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Muda wa Kulipa Kwa MWezi</label>  
  <div class="col-md-4">
  <input id="text" name="month_payment" type="text" placeholder="Mfano Mitatu" class="form-control input-md" required="">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Awamu za Kulipa</label>  
  <div class="col-md-4">
  <input id="text" name="payment_phase" type="text" placeholder="Mfano Tatu" class="form-control input-md" required="">
 
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
</body>
</html>
@endsection