<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin.new.post.edit',$new->id)}}" method="POST">
        @csrf
        <div>
            <label>Title</label>
            <div>
                <input type="text"
                @if(isset($new->title))
                value="{{$new->title}}"
                @endif
                name='title' placeholder="Type something here...">
            </div>
        </div>
        <div>
            <label>Description</label>
            <div>
                <input type="text"
                @if(isset($new->description))
                value="{{$new->description}}"
                @endif
                name="description" placeholder="Type something here...">
            </div>
        </div>
        <div class="control-group">
            <label>Author</label>
            <div>
                <input type="text"
                @if(isset($new->author))
                value="{{$new->author}}"
                @endif
                name="author" placeholder="Type something here...">
            </div>
        </div>
        <div>
            <label>Avatar</label>
            <div>
                <input type="file" style="display:none" id="basicinput" name="avatar">
                <br>
                <img src="
                @if(isset($new->avatar))
                {{asset($new->avatar)}}
                @endif
                " style="padding: 10px 10px;
                background-color: white;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" width="50px" height="50px">
            </div>
        </div>
        <div>
            <label>Category</label>
            <div>
                <select tabindex="1" name="category" data-placeholder="Select here..">
                    @foreach($cate as $val)
                        @if($val->status == 1)
                            <option
                            @if(isset($new->category) && $val->cate == $new->category)
                            <?php echo "selected"; ?>
                            @endif
                            >{{$val->cate}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <label>Status</label>
            <div>
                <select tabindex="1" name="status" data-placeholder="Select here..">
                    <option value="0"
                        @if($new->status == 0)
                            <?php echo "selected"; ?>
                        @endif
                    >Ẩn</option>
                    <option value="1"
                        @if($new->status == 1)
                            <?php echo "selected"; ?>
                        @endif
                    >Hoạt Động</option>
                </select>
            </div>
        </div>
        <div>
            <label>Content</label>
            <div>
                <textarea name="content" rows="10">
                    @if(isset($new->content))
                        {{$new->content}}
                    @endif
                </textarea>
            </div>
        </div>
        <div>
            <div>
                @if (count($errors) > 0)
                <div>
                    <a href="#">&times;</a>
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
                @endif
                @if (session('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
        <div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>