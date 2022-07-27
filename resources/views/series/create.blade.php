<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="col-2">
                <label for="seasonsQty" class="form-label">Temporadas:</label>
                <input type="text" id="seasonsQty" name="seasonsQty" class="form-control" value="{{ old('seasonsQty') }}">
            </div>
            <div class="col-2">
                <label for="epsPerSeason" class="form-label">Eps / Temporadas:</label>
                <input type="text" id="epsPerSeason" name="epsPerSeason" class="form-control" value="{{ old('epsPerSeason') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>