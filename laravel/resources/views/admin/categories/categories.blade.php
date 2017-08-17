@extends('admin.main')
@section('content')
    <table>
        <tr>
            <td>id</td>
            <td>Название</td>
            <td>Действие</td>
            <td>Действие</td>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td> <a href="{{action('CategoriesController@edit',['categories'=>$category->id])}}">Изменить</a></td>
                <td> <span class="del">Удалить</span></td>
            </tr>
         @endforeach

    </table>
    <script>

        $('document').ready(function()
        {
            $('.del').click(function()
            {
                parent=$(this).parent().parent();
                id=parent.children().first().html();
                console.log(id);
                confirm_var=confirm('Удалить категорию?');
                if (!confirm_var) return false;
                $.ajax({
                    url:'/adminzone/categories/'+id,
                    method: 'DELETE',
                    data: {'_token':"{{csrf_token()}}" },
                    success: function(msg)
                    {
                        parent.remove();
                        alert('Category '+msg+' destroy');
                    },
                    error: function(msg)
                    {
                        console.log(msg);
                    }
                });
            });
        });
    </script>
@endsection