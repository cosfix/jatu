@extends('layouts.master')

<h1>MAOMBI YA MKOPO</h1>

  <form action="">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
      <label for="amount">Amount in figure:</label>
      <input type="text" class="form-control" id="amount" placeholder="Jaza kiasi kwa tarakimu" name="amount">
    </div>
    <div class="form-group">
        <label for="amount in words">Amount in words:</label>
        <input type="text" class="form-control" id="amount" placeholder="Jaza kiasi kwa maneno" name="amount in words">
      </div>
      <div class="form-group">
        <label for="months">Time to pay(in months):</label>
        <input type="text" class="form-control" id="months" placeholder="Muda wa kulipa mkopo" name="months">
      </div>
      <div class="form-group">
        <label for="phase">Phases</label>
        <input type="text" class="form-control" id="phase" placeholder="Awamu za kulipa mkopo" name="phase">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
