@component('mail::message')

# Usuario {{ $nome }} 

Usuario {{ $nome }} com o email {{ $email}} e telefone {{ $telefone }} e com a mensagem {{ $duvida }}

Acesse aqui: 

    @component('mail::button', ['url' => route('support.index')]) 
        Ver série
    @endcomponent

@endcomponent