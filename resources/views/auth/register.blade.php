@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<fieldset>

<!-- Form Name -->
<legend>Formu ya Kujiunga </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Jina Kamili</label>  
  <div class="col-md-8">
  <input id="name" name="name" type="text" placeholder="Mfano Cosmas Paulo" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group ">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Barua Pepe') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Mfano@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<div class="form-group">
  <label class="col-md-4 control-label " for="selectbasic">Jinsia</label>
  <div class="col-md-4">
    <select id="gender" name="gender" class="form-control" >
      <option >KE</option>
      <option >ME</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label " for="location">Mtaa Anakoishi</label>  
  <div class="col-md-8">
  <input id="location" name="location" type="text" placeholder="Mfano Mtaa wa Ferry" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<label for="example-date-input" class="col-4 col-form-label">Terehe Ya kujiunga</label>
  <div class="col-md-8">
    <input class="form-control" type="date" value="2020-09-25" id="example-date-input" name="date">
  </div>

<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="saving">Akiba</label>  
  <div class="col-md-6">
  <input id="saving" name="saving" type="number" placeholder="Akiba" class="form-control input-md" required="">
    
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label " for="work">Shughuli Afanyayo</label>  
  <div class="col-md-8">
  <input id="work" name="work" type="text" placeholder="Mfano Mjasiliamali" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="status">Hali ya Ndoa</label>  
  <div class="col-md-6">
  <input id="status" name="status" type="text" placeholder="Mfano Ameoa" class="form-control input-md" required="">
    
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Namba Ya Simu</label>  
  <div class="col-md-8">
  <input id="phone" name="phone" type="text" placeholder="Mfano 0712836758" class="form-control input-md" required="">
    
  </div>
</div>
 

<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="phone">Idadi Ya Tegemezi</label>  
  <div class="col-md-6">
  <input id="phone" name="phone" type="text" placeholder="Mfano Wawili" class="form-control input-md" required="">
    
  </div>
</div> -->

<!-- Button -->


                        <div class="form-group ">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Nywila') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Thibitisha Nywila') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

<div class="form-group">
  
  <button type="submit" class="btn btn-primary">Jisajili</button>
</div>


</fieldset>
</form>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
