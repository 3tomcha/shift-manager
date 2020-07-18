<h1>登録日時一覧画面</h1>
あなたが登録した日は、<br>
@foreach($staffs as $staff) 
{{$staff->date }}<br>
@endforeach
です