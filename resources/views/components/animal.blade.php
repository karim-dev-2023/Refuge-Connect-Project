<article
    class="animal-card">
    <a href="{{route('animal.details', ['id' => $id])}}" title="En savoir plus">

        <header class="animal-card-header">
            <div class="animal-card-image-wrapper">
                <img alt="Bella" src="{{ asset($photo) }}"  />
            </div>
        </header>
    </a>
    <section  class="animal-card-content">
        <h2 class="animal-card-title">{{$name}}</h2>
        <div class="animal-card-meta">
            <p><span >Espèce:</span> {{$species}} </p>
            <p><span >Âge:</span> {{$age}}</p>
            <p class="animal-card-description">
                {{ $description }}
            </p>
        </div>

        <footer class="animal-card-actions">
            <a href="{{route('animal.update', ['id' => $id])}}" >Modifier</a>
            <a href="{{route('animal.delete', ['id' => $id])}}" >Supprimer</a>
        </footer>
    </section >
</article>