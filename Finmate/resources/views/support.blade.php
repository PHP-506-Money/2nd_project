@extends('layout.layout')

@section('title', 'support')

@section('contents')
    @include('layout.errorsvalidate')
    <p>질문이나 제안이 있으신가요? 여기서 도와드리겠습니다.</p>
    <form action="" method="get">
        @csrf
        <button type ="submit"> 1:1 문의하기 </button>
    </form>
    <hr>
    <p>이메일이나 전화로 연락주세요</p>
    <p>email@email.com</p>
    <p>1588-1588</p>
@endsection