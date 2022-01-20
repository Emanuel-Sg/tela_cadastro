function validar() {
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let telefone = document.getElementById("telefone").value;
    let mensagem = document.getElementById("senha").value;
    let mensagem = document.getElementById("data_nasc").value;
    if (nome == "") {
        alert("Preencha o campo Nome");
        return false;
    } else if (email == "") {
        alert("Preencha o campo Email");
        return false;
    } else if (telefone == "") {
        alert("Preencha o campo Telefone");
        return false;
    } else if (mensagem == "") {
        alert("Preencha o campo Senha");
        return false;
    } else if (mensagem == "") {
        alert("Preencha o campo Data de Nascimento");
        return false;
    }
    else {
        return true;
    }
}