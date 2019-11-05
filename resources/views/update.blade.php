<?php



?>

<a href="/blog/public/showall">zobrazit</a>
<a href="/blog/public/getAddUserForm">pridat</a>


<form method="post" action="{{action('UserController@updateAction',['id' =>$user->id])}}">
    meno:<br>
    <input type="text" name="firstname" value="{{$user->meno}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="{{$user->priezvisko}}">
    <br>
    email:<br>
    <input type="text" name="Email" value="{{$user->email}}">
    <br>
    Vek:<br>
    <input type="number" name="age" value="{{$user->vek}}">

    <br><br>
    <input type="hidden" name="_token"  value="{{ csrf_token() }}">
    <input type="submit" value="Upravit">
</form>