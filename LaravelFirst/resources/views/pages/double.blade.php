<style>
    h1{
		letter-spacing: 0.7em;
		color: $primaryColor;
		text-transform: uppercase;
		font-weight: 300;
		padding-bottom: 10px;
	}
</style>
<!--cách file con lấy giao diện từ file master
    @extendes('Tên file muốn lấy giao diện') -->
@extends('layouts.master')
@section('double')
    <p>Sử dụng cả Laravel và ASP.Net</p>
@endsection