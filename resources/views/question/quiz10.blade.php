    @extends('common.main')

    @section('title','クイズ画面')

    @section('content')

    <h1>クイズ登録画面</h1>

    @if(session('success'))
    <div style="color:green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('quiz10_test2') }}" method="post">
        @csrf
        <label for="name"></label><br>
        <input type="text" id="name" name="name" placeholder="名前を入力"><br>
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror

        <label for="number"></label><br>
        <input type="number" id="type" name="type" placeholder="数値を入力"><br><br>
        @error('type')
        <div style="color:red;">{{ $message }}</div>
        @enderror

        <button type="submit">送信ボタン</button>
    </form>

    @endsection