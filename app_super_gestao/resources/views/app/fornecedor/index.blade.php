<h3>Fornecedor</h3>

{{-- este e um comentario, o interpretador descarta. --}}

@php
    
@endphp



@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores</h3>
@else
    <h3>Ainda nao existem fornecedores</h3>
@endif