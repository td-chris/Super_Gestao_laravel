<h3>Fornecedor</h3>

{{-- blade if --}}
{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existe nenhum fornecedor cadastrado</h3>
@endif --}}

{{-- @dd($fornecedores) --}}

@isset($fornecedores)



    {{-- blade for para percorrer o array --}}
    @for ($i = 0; isset($fornecedores[$i]); $i++)

        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        

        {{-- blade operador condicional de valor default --}}
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        {{-- 
            variável testada não estiver definida (isset)
            ou
            variável testada possui o valor null
        --}}

        {{-- blade isset --}}
        {{-- @isset($fornecedores[$i]['cnpj'])
            CNPJ: {{ $fornecedores[$i]['cnpj'] }}
            
            {{-- blade empty --}}
            {{-- @empty($fornecedores[$i]['cnpj'])
                - Vazio
            @endempty
        @endisset --}}


        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }} 

        {{-- blade switch --}}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                - São Paulo - SP
                @break
            @case('32')
                - Juiz de Fora - MG
                @break
            @case('85')
                - Fortaleza - CE
                @break
            @default
                - Estado não identificado
        @endswitch
        <hr>
    @endfor   
    
    {{-- blade while --}}
      {{-- @php $i = 0 @endphp
      @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }} 
        @php $i++ @endphp
      @endwhile --}}

    {{-- blade foreach --}}
      {{-- @foreach ($fornecedores as $indice => $fornecedor)    
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }} 
      @endforeach --}}

    {{-- blade forelse --}}
      {{-- @forelse ($fornecedores as $indice => $fornecedor)    
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }} 
        @empty
            Não existem fornecedores cadastrados!!     
      @endforelse --}}

@endisset

{{-- blade unless --}}
{{-- Mesma condição do unless abaixo --}}
{{-- @if ( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br> --}}

{{-- O unless é utilizado quando queremos retornar uma condicao falsa sem inverter o if --}}
{{-- @unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless --}}

@php
    /*
    if () {
        # code...
    } elseif () {
        # code...
    } else {
        # code...
    }
    */
@endphp