<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
    </head>
    <body>
        <header>
            <h1>Buat Account Baru</h1>
            <h2>Sign Up Form</h2>
            <p>Mohon mengisi data diri dengan lengkap dan sesuai!</p>
            <form action="/welcome" method="POST">
                @csrf
                <br>
                <label for="first-name">First Name</label> <br>
                <input type="text" id="first-name" name="fname" required> <br><br>
                <label for="last-name">Last Name</label> <br>
                <input type="text" id="last-name" name="lname"> <br><br>
                <label>Gender</label> <br>
                <input type="radio">Male<br>
                <input type="radio">Female<br>
                <input type="radio">Others<br>
                <br>
                <label>Date of Birth</label> <br>
                <input type="date" name="date" required> <br><br>
                <label>Nationality :</label> <br>
                <select name="nationnality">
                    <option value="Indonesian">Indonesian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Europe">Europe</option>
                    <option value="Others">Others</option>
                </select> <br><br>
                <label>Language Spoken :</label> <br>
                <input type="checkbox" name="Language">Bahasa<br>
                <input type="checkbox" name="Language">Mandari<br>
                <input type="checkbox" name="Language">English<br>
                <input type="checkbox" name="Language">Others<br>
                <br>
                <label>Bio :</label> <br>
                <textarea name="bio" rows="10" cols="30"></textarea>
                <br><br>
                <input type="submit" value="SignUp"><br>
            </form>
        </header>
    </body>
</html>