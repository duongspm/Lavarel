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

@section('NoiDung')
    <p>nội dung View con</p>
@endsection