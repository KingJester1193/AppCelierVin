@extends('layouts.app')
@section('title', 'Celliers')
@section('content')



<section class="liste_celliers">
        <div class="header">

            <div>
                <h1>Mes Celliers</h1>
                 
<<<<<<< HEAD:resources/views/users/dashboard.blade.php
                <!-- Button trigger modal -->
                <!-- <button type="button" class="" style="width:35px;" @click="showModal = true"> -->
                    <a href="{{ route('cellier.create') }}">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 2"><path d="M16 29a13 13 0 1 1 13-13 13 13 0 0 1-13 13Zm0-24a11 11 0 1 0 11 11A11 11 0 0 0 16 5Z" fill="#7e001e" class="fill-000000"></path><path d="M16 23a1 1 0 0 1-1-1V10a1 1 0 0 1 2 0v12a1 1 0 0 1-1 1Z" fill="#7e001e" class="fill-000000"></path><path d="M22 17H10a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2Z" fill="#7e001e" class="fill-000000"></path></g><path d="M0 0h32v32H0z" fill="none"></path></svg>
                    </a>
                <!--</button> -->
=======
>>>>>>> a9fbf85f688949e2d37e37ff6210ffdd42d405ab:resources/views/dashboard.blade.php
            </div>

            <div>
                <!--<a href=""><svg fill="none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M1 1h6v6H1V1ZM9 1h6v6H9V1ZM1 9h6v6H1V9ZM9 9h6v6H9V9Z" fill="#7e001e" class="fill-030708"></path></svg></a><!--Grid !!-->
                <!--<a href=""><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect height="4" rx="2" width="22" x="1" y="2" fill="#7e001e" class="fill-232323"></rect><rect height="4" rx="2" width="22" x="1" y="18" fill="#7e001e" class="fill-232323"></rect><rect height="4" rx="2" width="22" x="1" y="10" fill="#7e001e" class="fill-232323"></rect></svg></a><!-- List !!-->
              
            </div>

        </div>

        <div class="grid__celliers">
        @forelse($celliers as $cellier)
            <div class="card__cellier"><a href="{{ route('cellier.show', $cellier->id)}}">{{ $cellier->nom }}</a></div>
               
        @empty
            <h3>Aucun cellier</h3>
        @endforelse

        
        </div>
    

        <!-- Button trigger modal -->
            <!--<button type="button" class="" style="width:35px;" @click="showModal = true">-->
                <a href="{{ route('cellier.create') }}" class="btn">Ajouter un cellier
                </a>
            <!--</button> -->

 

    
</section>

                                    
    <!-- Modal -->
   <!-- <div class="" x-show="showModal" @click.away="showModal = false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout d'un cellier</h1>
                    <button type="button" class="" @click="showModal = false" aria-label="Fermer">X</button>
                </div>
                <form action="" method="post">
                     @csrf
                <div class="modal-body">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="" value="{{old('nom')}}">
                </div>
                <div class="modal-footer">
                    
                    <input type="submit" value="Créer" class="">
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!--/Modal -->
@endsection



