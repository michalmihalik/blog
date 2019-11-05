<?php

?>

<a href="/blog/public/showall">zobrazit</a>
<a href="/blog/public/getAddUserForm">pridat</a>

<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->meno}} {{$user->priezvisko}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                <a href="{{action("UserController@showAction",['id'=>$user->id])}}">editovat</a>
                <a href="{{action("UserController@deleteAction",['id'=>$user->id])}}">vymazat</a>
            </td>


        </tr>
        @endforeach

</table>


