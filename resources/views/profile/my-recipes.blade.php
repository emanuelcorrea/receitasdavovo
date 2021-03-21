@extends('profile.main')

@section('profile-content')
    <div class="profile-content__title">
        <h2>Minhas receitas</h2>
    </div>
    <div class="my-recipes">
        <div class="my-recipes__search">
            <form action="#">
                @csrf

                <input aria-label="Pesquise sua receita" type="text" name="recipe_name" placeholder="Busque sua receita...">
            </form>
        </div>

        <div class="my-recipes__list">
            <ul>
                <li class="my-recipes-item">
                    <div class="my-recipes-item__image">
                        <img src="http://127.0.0.1:8000/img/receitas/quentao-vinho.jpg" alt="Recipe Image">
                    </div>
                    <div class="my-recipes-item__overlay">
                        <div class="my-recipes-item__name">
                            <a href="#">Quentão de vinho</a>
                        </div>
                        <div class="my-recipes-item__options">
                            <div class="my-recipes-item__edit">
                                <i class="far fa-edit"></i>
                            </div>
                            <div class="my-recipes-item__remove">
                                <i class="fas fa-trash"></i>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
