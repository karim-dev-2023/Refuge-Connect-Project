<div
    style="width:260px;background:#fff;border:1px solid rgba(15,23,42,.10);border-radius:14px;overflow:hidden;box-shadow:0 10px 30px rgba(15,23,42,.06);">
    <a href="{{route('animal.details', ['id' => $id])}}" title="En savoir plus">

        <div style="padding:12px 12px 0;">
            <div style="height:150px;border-radius:12px;overflow:hidden;background:#dbeafe;">
                <img alt="Bella" src="{{ Storage::url($photo) }}"
                    style="width:100%;height:100%;object-fit:cover;display:block;" />
            </div>
        </div>
    </a>
    <div style="padding:12px 14px 14px;">
        <div style="font-weight:900;font-size:18px;margin:2px 0 6px;color:#0b1220;">{{$name}}</div>
        <div style="font-size:12px;color:rgba(15,23,42,.72);line-height:1.35;">
            <div><span >Espèce:</span> {{$species}}
            </div>
            <div><span >Âge:</span> {{$age}}</div>
            <div style="margin-top:6px;">
                {{ $description }}
            </div>
        </div>

        <div style="display:flex;justify-content:space-around;gap:10px;margin-top:12px;">
            <a href="{{route('animal.update', ['id' => $id])}}" style="font-size:12px;color:#52c9ff;font-weight:700;text-decoration:none;">Modifier</a>
            <a href="{{route('animal.delete', ['id' => $id])}}" style="font-size:12px;color:#52c9ff;font-weight:700;text-decoration:none;">Supprimer</a>
        </div>
    </div>
</div>