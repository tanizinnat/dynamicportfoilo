@extends('layout')
@section('title', 'Contact')
@section('content')
<div class="contact-container">
  <h1>Contact Me</h1>
  <p class="contact-info">
    Feel free to reach out to me for any collaboration, queries, or opportunities.
    I'm always excited to connect and contribute.
  </p>
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="Zinnat Tani" readonly>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="tani15-5315@diu.edu.bd" readonly>

    <label for="message">Message:</label>
    <textarea id="message" name="message" placeholder="Write your message here..."></textarea>

    <button type="submit">Send</button>
  </form>
</div>
@endsection
