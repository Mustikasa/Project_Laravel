@extends('layouts.main')

@section('container')
    <center><h1>About Me</h1></center>
    <center><h3><?= $name; ?></h3></center>
   <center><h4><?= $class; ?></h4></center> 
   <center><h5>Alamat: Konoha Gakure</h5></center> 




   <center><img src="img/mustika.jpeg" alt="Mustika Syukur" width="200">
</center> 
   
    @endsection
