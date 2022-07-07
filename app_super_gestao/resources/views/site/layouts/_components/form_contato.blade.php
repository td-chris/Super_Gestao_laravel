{{ $slot }}

<form action="{{ route('site.contatos') }}" method="post">
  @csrf
    <input name="name" type="text" placeholder="Nome" class="{{ $style }}">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="{{ $style }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $style }}">
    <br>
    <select name="motive" class="{{ $style }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="{{ $style }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $style }}">ENVIAR</button>
</form>