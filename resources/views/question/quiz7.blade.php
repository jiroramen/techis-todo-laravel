    <a href="{{ url('/quiz6') }}">quiz6の画面にurl関数で移動する</a>
    <p><a href="{{ route('quiz6_test') }}">quiz6の画面にroute関数で移動する</a></p>
    
    <p><a href="{{ url('/quiz9', ['id' => $quiz -> id]) }}">quiz9の画面にurl関数で移動する</a></p>
    <p><a href="{{ route('quiz9_test', ['id' => $quiz -> id]) }}">quiz9の画面にroute関数で移動する</a></p>
    
    <form action="{{ url('quiz9', ['id' => $quiz -> id]) }}" method="post">
        @csrf <input type="submit" value="送信ボタン"></form>