@props(['headers' => []])
<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table table-striped']) }}>
        @if($headers)
        <thead>
            <tr>
                @foreach($headers as $header)
                <th>{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        @endif
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>