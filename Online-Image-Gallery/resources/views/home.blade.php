@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="/Assets/css/dashbord.css">

@section('content')
<div id="introduction">
    <br>
    <center><h1>Geani-Systems</h1></center>
    <br>
    <br>
    <br>
    <br>
    <center><h4>In acest meniu puteti asocia baze de date cu foldere cu imagini. Exista 5 de baze de date posibile care pot fi asociate. In folderele asociate trebuie sa existe numai imagini. Sistemul functioneaza in modul afisat in imaginea de mai jos.</h4></center>
    <br>
    <div id="devider"></div>
    <img id="dbModel" src="/Assets/img/dbModel.png">
    <div id="devider"></div>
    <br>
    <br>
    <br>
    <center><h4>Alegeti folder-ul si baza de date cu care sa se asocieze.</h4></center>
    <br>
    <br>
    <br>
    <form class="form-horizontal" role="form" method="POST" action="{{ route('database.submit') }}" enctype="multipart/form-data">
        {{ csrf_field() }}


        <h4 id="name1">Folder</h4>
        <h4 id="name2">Baza de date</h4>
        <br>
        <br>
        <select id="FolderData" name="foldere">
            <option value="1">Folder1</option>
            <option value="2">Folder2</option>
            <option value="3">Folder3</option>
            <option value="4">Folder4</option>
            <option value="5">Folder5</option>
        </select>
        <select id="DatabaseData" name="baze_de_date">
            <option value="1">image-folder-1</option>
            <option value="2">image-folder-2</option>
            <option value="3">image-folder-3</option>
            <option value="4">image-folder-4</option>
            <option value="5">image-folder-5</option>
        </select>
        <br><br>
        <br><br>
        <br><br>
        <center><input type="submit"></center>
    </form>
</div>
@endsection
