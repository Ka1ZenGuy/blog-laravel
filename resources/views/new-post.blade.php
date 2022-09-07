<x-layout>
    <form action="/new-post" method="post">
        @csrf <!-- Marca de agua que sirve para comprobar si es el document0-->
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title">

        <label for="excerpt">Extracto</label>
        <input type="text" name="excerpt" id="excerpt">

        <label for="category_id">Categoria</label>
        <select name="category_id" id="category_id">
            <option>--Selecciona una categoría--</option>
            @foreach ( $categories as $category )

            <option value="{{category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <!--<input type="number" name="category_id" id="category">-->>

        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <input type="submit" value="Publicar">
    </form>
</x-layout>

<x-header />

<x-menu>
    <form action="" method="get">

    </form>
</x-menu>

<x-footer>

</x-footer>
