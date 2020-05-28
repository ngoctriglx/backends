<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin.new.post.create')}}" method="POST">
        @csrf

        <label>Title</label>
        <div class="controls">
            <input type="text" name='title' placeholder="Type something here...">
        </div>

        <label>Description</label>
        <div>
            <input type="text" name="description" placeholder="Type something here...">
        </div>

        <label >Author</label>
            <div>
                <input type="text" 
                value="@if($author)
                            {{$author}}
                        @endif" 
                name="author" placeholder="Type something here...">
            </div>
        <label>Category</label>
        <div>
        <select tabindex="1" name="category" data-placeholder="Select here..">
            <option value="">Select here..</option>
                @foreach($cate as $val)
                   {{--  @if($val->status == 1)  --}}
                        <option>{{$val->cate}}</option>
                    {{--  @endif  --}}
                 @endforeach
            </select>
        </div>
        <label>Status</label>
        <div>
        <select tabindex="1" name="status" data-placeholder="Select here..">
                <option value="1">Hoạt Động</option>
                <option value="0">Ẩn</option>
        </select>
        </div>
        <label>Content</label>
        <textarea name="content" rows="5"></textarea>
        <br>
        @if (count($errors) > 0)
        <div class="alert alert-danger span8">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>