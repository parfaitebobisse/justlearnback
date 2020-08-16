@foreach ($forum->messages()->orderBy('created_at','ASC')->get() as $message)
    @if($message->emetteur->id != auth()->user()->id)
    <div class="bloc_message" style="justify-content: flex-start;">
        <div class="message">
            <h3 class="nom_emeteur">{{ $message->emetteur->nom }} {{ $message->emetteur->prenom }}</h3>
            <p class="messsage">
                {{ $message->contenu }} <br>
                @if($message->fichier)
                    Fichier envoyé : <a href="{{ asset('uploads/'.$message->fichier) }}" target="_blank">{{ $message->fichier }}</a></p>
                @endif
            </p>
            <span class="date_envoie">{{ $message->created_at->diffForHumans() }}</span>
        </div>
    </div>
    @else
    <div class="bloc_message" style="justify-content: flex-end;">
        <div class="message message_envoye">
            <h3 class="nom_emeteur">Moi</h3>
            <p class="messsage">
                {{ $message->contenu }} <br>
                @if($message->fichier)
                    Fichier envoyé : <a href="{{ asset('uploads/'.$message->fichier) }}" target="_blank">{{ $message->fichier }}</a></p>
                @endif
            </p>
            <span class="date_envoie">{{ $message->created_at->diffForHumans() }}</span>
        </div>
    </div>
    @endif
@endforeach
