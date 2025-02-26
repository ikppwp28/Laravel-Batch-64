@extends('layouts.master')

@section('title')
    Sign Up Form
@endsection    

@section('content')
    <header>
        <h1>Buat Account Baru</h1>
        <p>Mohon mengisi data diri dengan lengkap dan sesuai!</p>
    </header>

    <form action="{{ url('/welcome') }}" method="POST">
        @csrf

        <label for="first-name">First Name</label> <br>
        <input type="text" id="first-name" name="fname" required> <br><br>

        <label for="last-name">Last Name</label> <br>
        <input type="text" id="last-name" name="lname"> <br><br>

        <label>Gender</label> <br>
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>
        <input type="radio" name="gender" value="Others"> Others <br><br>

        <label>Date of Birth</label> <br>
        <input type="date" name="date" required> <br><br>

        <label>Nationality :</label> <br>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Chinese">Chinese</option>
            <option value="European">European</option>
            <option value="Others">Others</option>
        </select> <br><br>

        <label>Language Spoken :</label> <br>
        <input type="checkbox" name="language[]" value="Bahasa"> Bahasa <br>
        <input type="checkbox" name="language[]" value="Mandarin"> Mandarin <br>
        <input type="checkbox" name="language[]" value="English"> English <br>
        <input type="checkbox" name="language[]" value="Others"> Others <br><br>

        <label>Bio :</label> <br>
        <textarea name="bio" rows="10" cols="30"></textarea> <br><br>

        <input type="submit" value="Sign Up">
    </form>
@endsection