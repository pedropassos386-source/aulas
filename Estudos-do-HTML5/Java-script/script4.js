document.addEventListener("DOMContentLoaded", () => {

    // FORMULÁRIO LOGIN
    const formLogin = document.querySelector(".form-login");

    formLogin.addEventListener("submit", (e) => {
        e.preventDefault();

        const email = formLogin.querySelector("input[type=email]").value;
        const senha = document.getElementById("senha").value;

        if (email === "" || senha === "") {
            alert("Preencha todos os campos do login!");
            return;
        }

        alert("Login realizado com sucesso!");

        // REDIRECIONAR
        window.location.href = "http://localhost/pedro-passos/html-e-css/projeto_01/index.html";
    });





    // FORMULÁRIO CADASTRO
    const formCadastro = document.querySelector(".criar-conta");

    formCadastro.addEventListener("submit", (e) => {
        e.preventDefault();

        const nome = formCadastro.querySelector('input[placeholder="Nome"]').value;
        const sobrenome = formCadastro.querySelector('input[placeholder="Sobrenome"]').value;
        const email = formCadastro.querySelector('input[type=email]').value;
        const senha = formCadastro.querySelector('input[type=Password]').value;

        const dia = document.querySelector('select[name="nascimento-dia"]').value;
        const mes = document.querySelector('select[name="nascimento-mes"]').value;
        const ano = document.querySelector('select[name="nascimento-ano"]').value;

        const sexo = document.querySelector('input[name="sexo"]:checked');

        if (
            nome === "" ||
            sobrenome === "" ||
            email === "" ||
            senha === ""
        ) {
            alert("Preencha todos os campos!");
            return;
        }

        if (!sexo) {
            alert("Selecione o sexo!");
            return;
        }

        if (senha.length < 6) {
            alert("A senha precisa ter pelo menos 6 caracteres!");
            return;
        }

        alert("Cadastro realizado com sucesso!");

        formCadastro.reset();
    });

});