@extends('layouts.app')

@section('content')
<div class="container">
    <h5>MAOMMBI YA MKOPO</h5>
    <form action="{{ route('maendeleo.store') }}" method="post">
      @csrf
      {{--  <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>  --}}
      <div class="form-group">
        <label for="amount in figure">Kiasi kwa tarakimu</label>
        <input type="text" class="form-control" id="amount in figure" placeholder="mfano. 2,000,000" name="amount_in_figures">
      </div>
      <div class="form-group">
        <label class="form-check-label">Kiasi kwa maneno </label>
          <input type="text" class="form-control" placeholder="mfano. Milioni mbili tu." name="amount_in_words">
      </div>
      <div class="form-group">
        <label for="months">Muda wa kulipa(kwa miezi)</label>
        <input type="text" class="form-control" id="months" placeholder="mfano. 6 " name="months">
      </div>
      <div class="form-group">
        <label for="phase">Awamu za kulipa mkopo:</label>
        <input type="text" class="form-control" id="phases" placeholder="mfano. 3" name="phase">
      </div>
      <div class="form-group">
        <label for="total">Jumla(mkopo na riba)</label>
        <input type="text" class="form-control" id="total" placeholder="5,256,700" name="total">
      </div>
      <h5 style="text-align:center;">MADHUMUNI YA MKOPO</h5>
      <div class="form-group">
        <label for="purpose">Dhumuni</label>
        <input type="text" class="form-control"  id="purpose" name="purpose" required>
        {{--  <label for="purpose">Tshs.</label>
        <input type="text" class="form-control"  id="purpose" name="purpose">  --}}
      </div>
      <h5 style="text-align:center;">DHAMANA YA MKOPO</h5>
<div class="form-check-group">
  <label class="form-check-label">
    <input type="checkbox" name="collateral[]" class="form-check-input" value="1">AKIBA
  </label>
</div><br>
<div class="form-check-group">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="2">HISA
  </label>
</div><br>
<div class="form-check-group">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" value="3">MAZAO
    </label>
  </div><br>
      <h5 style="text-align:center;">MAELEZO YA MWOMBAJI ANAYEDAIWA</h5>
      <div class="form-inline">
      <label for="purpose">Mdai</label>
      <input type="text" class="form-control"  id="creditor" name="creditor">
      <label for="purpose">Address.</label>
      <input type="text" class="form-control"  id="address" name="creditor_Address">
      <label for="purpose">Tshs.</label>
      <input type="text" class="form-control"  id="purpose" name="creditor_amount">
    </div>
    <br><br>
    <h5 style="text-align:center;">MAELEZO YA WADHAMINI</h5>
    <div class="form-group">
        <label for="mdhamini1">Mdhamini wa kwanza namba ya uanachama.</label>
        <input type="text" class="form-control"  id="purpose" name="mdhamini1" required>
    </div>
    <div class="form-group">
        <label for="mdhamini2">Mdhamini wa pili namba ya uanachama.</label>
        <input type="text" class="form-control"  id="purpose" name="mdhamini2" required>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
@endsection