<h3>Fornecedor</h3>

{{-- este e um comentario, o interpretador descarta. --}}

@php
    
    
@endphp

@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor {{ $fornecedores[$i]['nome'] }}
        <br>
        Status {{$fornecedores[$i]['status']}}
        <br>
        CNPJ {{  $fornecedores[$i]['cnpj'] ?? 'Dado nao preenchido'}}
        <br>
        Telefone ({{  $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? ''}}
        <hr>
    @endfor
@endisset