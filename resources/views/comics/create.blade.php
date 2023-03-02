@extends('layout.main')

@section('main-content')
<form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <div class="row mt-3">
        <div class="col-6">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo comics</label>
                <input type="text" class="form-control" id="title" placeholder="titolo" name="title">
              </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine url</label>
                <input type="url" class="form-control" id="thumb" placeholder="image" name="thumb">
              </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" placeholder="prezzo" name="price">
            </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" placeholder="serie" name="series">
            </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" id="sale_date" placeholder="data" name="sale_date">
            </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" placeholder="tipo" name="type">
            </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" class="form-control"></textarea>
            </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea name="artists" id="artists" cols="30" class="form-control"></textarea>
            </div>
              
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <textarea name="writers" id="writers" cols="30" class="form-control"></textarea>
            </div>
              
        </div>
    </div>
    
    <button type="submit" class="btn btn-success mb-3">Salva</button>
  </form>
@endsection