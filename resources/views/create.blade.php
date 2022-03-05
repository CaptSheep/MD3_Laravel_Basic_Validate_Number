<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="main-content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Form điền thông tin</h1>
    <form method="post" action="{{ route('store') }}">
        {{ csrf_field() }}
        <label for="number">chỉ được nhập số</label>
        <input type="text" name="number">

        <button type="submit">Kiểm tra</button>
    </form>
</div>
</body>
</html>
