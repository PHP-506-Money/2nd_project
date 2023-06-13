@extends('layout.layout')

@section('title', 'List Page')

@section('header', 'List Page')

@section('contents')

<div class="contBox form">

    <table>



        <tr>
            <th>글번호</th>
            <th>제목</th>
            <th>조회수</th>
            <th>등록일</th>
            <th>수정일</th>
        </tr>



        @empty

        @endforelse
    </table>

    <a class="button" href="{{route('boards.create')}}">글 작성</a>

</div>


@endsection
