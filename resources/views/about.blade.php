@extends('layout')
@section('title', 'About')
@section('content')
<div class="about-container">
  <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image">
  <h1 class="section-title">About Me</h1>
  <p class="about-text">
    I am in my final year pursuing a <strong>BSc in Computer Science and Engineering</strong> at Daffodil International University.
    I'm passionate about <span class="highlight">Artificial Intelligence</span>, <span class="highlight">Web Development</span>,
    and solving real-world problems using technology.
  </p>
</div>
@endsection
