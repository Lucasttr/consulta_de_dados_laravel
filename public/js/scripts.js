console.log("Script JS carregado com sucesso!");

function handlePhone(event) {
      let input = event.target;
      let value = input.value.replace(/\D/g, "");

      if (value.length > 10) {
        value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
      } else if (value.length > 5) {
        value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, "($1) $2-$3");
      } else if (value.length > 2) {
        value = value.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
      } else {
        value = value.replace(/^(\d*)/, "($1");
      }

      input.value = value;
    }

    function aplicarMascaraCPF(input) {
      let valor = input.value.replace(/\D/g, "");
      valor = valor.substring(0, 11); 
      valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
      valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
      valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
      input.value = valor;
    }

    function validarEntrada(event) {
      const tecla = event.key;
      if (!/^\d$/.test(tecla) && tecla !== "Backspace" && tecla !== "Delete" && tecla !== "Tab") {
        event.preventDefault(); 
      }
    }

