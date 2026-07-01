@props(['id', 'title' => '', 'formAction' => null])
<div class="modal fade" tabindex="-1" role="dialog" id="{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @if($formAction)
            <form action="{{ $formAction }}" method="POST">
                @csrf
            @endif
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @if(isset($footer))
            <div class="modal-footer bg-whitesmoke br">
                {{ $footer }}
            </div>
            @endif
            @if($formAction)
            </form>
            @endif
        </div>
    </div>
</div>