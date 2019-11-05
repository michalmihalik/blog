<?php



?>

<a href="/blog/public/showall">zobrazit</a>
<a href="/blog/public/getAddUserForm">pridat</a>


<form method="post" action= "{{action('UserController@insertAction')}}">
    meno:<br>
    <input type="text" name="firstname" value="">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="">
    <br>
    email:<br>
    <input type="text" name="Email" value="@">
    <br>
    Vek:<br>
    <input type="number" name="age" value="">

    <br><br>
    <input type="submit"  value="Odoslať">
    {{csrf_field()}}
</form>