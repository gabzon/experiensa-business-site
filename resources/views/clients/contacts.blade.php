@if ( is_user_logged_in() )
<div class="contacts">
        <h3>Contacts</h3>
        <hr>
        <div class="row">
            @foreach($contacts as $p)
            @for($i = 0; $i < count($p); $i++ ) <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p[$i]['exp_client_contact_person']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{ $p[$i]['exp_client_contact_type'] }}
                        </h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        @if($p[$i]['exp_client_contact_email'])
                        <li class="list-group-item">
                            <i class="fas fa-envelope"></i> {{ $p[$i]['exp_client_contact_email'] }}
                        </li>
                        @endif
                        @if($p[$i]['exp_client_contact_phone'])
                        <li class="list-group-item">
                            <i class="fas fa-phone"></i> {{ $p[$i]['exp_client_contact_phone'] }}
                        </li>
                        @endif
                    </ul>
                </div>
        </div>
        @endfor
        @endforeach
    </div>
@endif