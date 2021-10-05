<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>

    <h3>Sign Up Form</h3>

    <form action="/Welcome" method="POST">
        @csrf
        <p>
            <label>First name :</label><br><br>
            <input type="text" name="nama_pertama"><br>
        </p>
        <p>
            <label>Last name :</label><br><br>
            <input type="text" name="nama_kedua"><br>
        </p>
        <p>
            <label>Gender :</label><br><br>
            <label><input type="radio" name="Gender" value="Male" />Male</label><br>
            <label><input type="radio" name="Gender" value="Female" />Female</label><br>
            <label><input type="radio" name="Gender" value="Other" />Other</label><br>
        </p>
        <p>
            <label>Nationality : </label><br><br>
            <select name="Nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Amerika">Amerika</option>
                <option value="Prancis">Prancis</option>
            </select>
        </p>
        <p>
            <label>Language Spoken :</label><br><br>
            <label><input type="checkbox" name="Language_Spoken" value="Bahasa Indonesia" />Bahasa Indonesia</label><br>
            <label><input type="checkbox" name="Language_Spoken" value="English" />English</label><br>
            <label><input type="checkbox" name="Language_Spoken" value="Other" />Other</label><br>
        </p>
        <p>
            <label>Bio:</label><br>
            <textarea name="Bio" rows="9" cols="30"></textarea><br><br>
        </p>
        <button type="submit">Sign Up</button><br>
        
    </form>

</body>
</html>